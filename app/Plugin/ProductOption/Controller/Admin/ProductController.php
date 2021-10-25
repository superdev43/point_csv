<?php
/*
* Plugin Name : ProductOption
*
* Copyright (C) 2015 BraTech Co., Ltd. All Rights Reserved.
* http://www.bratech.co.jp/
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace Plugin\ProductOption\Controller\Admin;

use Eccube\Application;
use Eccube\Common\Constant;
use Eccube\Controller\AbstractController;
use Eccube\Util\FormUtil;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Doctrine\Common\Collections\ArrayCollection;

class ProductController extends \Eccube\Controller\AbstractController
{

    private $app;

    public function export(Application $app, Request $request)
    {
        $this->app = $app;
        // タイムアウトを無効にする.
        set_time_limit(0);

        // sql loggerを無効にする.
        $em = $app['orm.em'];
        $em->getConfiguration()->setSQLLogger(null);

        $response = new StreamedResponse();
        $response->setCallback(function () use ($app, $request) {

             // ヘッダ行の出力.
            $header = \Plugin\ProductOption\Controller\Admin\ProductController::getHeader();

            $csvExportService = $app['eccube.service.csv.export'];

            $csvExportService->fopen();
            if(is_array($header))
            $csvExportService->fputcsv($header);

            $session = $request->getSession();
            if (version_compare(Constant::VERSION, '3.0.15', '<')) {
                if ($session->has('eccube.admin.product.search')) {
                    $searchData = $session->get('eccube.admin.product.search');
                    \Plugin\ProductOption\Controller\Admin\ProductController::findDeserializeObjects($searchData);
                } else {
                    $searchData = array();
                }
            }else{
                $viewData = $session->get('eccube.admin.product.search', array());
                $searchForm = $app['form.factory']->create('admin_search_product', null, array('csrf_protection' => false));
                $searchData = FormUtil::submitAndGetData($searchForm, $viewData);
            }

            // 受注データのクエリビルダを構築.
            $qb = $app['eccube.repository.product']
                    ->getQueryBuilderBySearchDataForAdmin($searchData);

            $qb->resetDQLPart('select')
                ->resetDQLPart('orderBy')
                ->select('p')
                ->orderBy('p.update_date', 'DESC')
                ->distinct();

            $Products = $qb->getQuery()->getResult();

            if(count($Products) > 0){
                foreach($Products as $Product){
                    $content = array();
                    $content[] = $Product->getId();
                    $content[] = $Product->getName();
                    $ProductOptions = $app['eccube.productoption.repository.product_option']->findBy(array('Product' => $Product), array('rank' => 'asc'));
                    if(count($ProductOptions) > 0){
                        $array = array();
                        foreach($ProductOptions as $ProductOption){
                            $array[] = $ProductOption->getOptionId();
                        }
                        $content[] = implode($app['config']['csv_export_multidata_separator'], $array);
                    }else{
                        $content[] = '';
                    }

                    $csvExportService->fputcsv($content);
                }
            }
            $csvExportService->fclose();
        });

        $now = new \DateTime();
        $filename = "product_option_" . $now->format('YmdHis') . '.csv';
        $response->headers->set('Content-Type', 'application/octet-stream');
        $response->headers->set('Content-Disposition', 'attachment; filename=' . $filename);
        $response->send();

        return $response;

    }

    function getHeader()
    {
        return array('商品ID','商品名','オプション割当情報');
    }

    function findDeserializeObjects(array &$searchData)
    {
        $app = \Eccube\Application::getInstance();
        $em = $app['orm.em'];
        foreach ($searchData as &$Conditions) {
            if ($Conditions instanceof ArrayCollection) {
                $Conditions = new ArrayCollection(
                    array_map(
                        function ($Entity) use ($em) {
                            return $em->getRepository(get_class($Entity))->find($Entity->getId());
                        }, $Conditions->toArray()
                    )
                );
            } elseif ($Conditions instanceof \Eccube\Entity\AbstractEntity) {
                $Conditions = $em->getRepository(get_class($Conditions))->find($Conditions->getId());
            }
        }
    }
}
