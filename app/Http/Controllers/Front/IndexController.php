<?php
namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Repositories\Front\IndexRepository;

class IndexController extends Controller
{

    //
    private $service;
    private $repo;
    public function __construct()
    {
        $this->repo = new IndexRepository;
    }



    // 返回【主页】视图
    public function view_root()
    {
        return $this->repo->view_root();
    }

    // 返回【主页】视图
    public function view_contact()
    {
        return $this->repo->view_contact();
    }


    // 返回【产品服务】【列表】视图
    public function view_services()
    {
        return $this->repo->view_services();
    }
    // 返回【产品服务】【详情】视图
    public function view_service($id=0)
    {
        return $this->repo->view_service($id);
    }


    // 返回【案例分享】【列表】视图
    public function view_cases()
    {
        return $this->repo->view_cases();
    }
    // 返回【产品服务】【详情】视图
    public function view_case($id=0)
    {
        return $this->repo->view_case($id);
    }


    // 返回【新闻动态】【列表】视图
    public function view_coverages()
    {
        return $this->repo->view_coverages();
    }
    // 返回【新闻动态】【详情】视图
    public function view_coverage($id=0)
    {
        return $this->repo->view_coverage($id);
    }



    //
    public function message_contact()
    {
        return $this->repo->message_contact(request()->all());
    }



}
