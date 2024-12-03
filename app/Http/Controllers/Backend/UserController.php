<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Services\Interfaces\UserServiceInterface as UserService;
use App\Repositories\Interfaces\ProvinceRepositoryInterface as ProvinceService;

class UserController extends Controller
{
    protected $userService;
    protected $proviceRepository;
     public function __construct(UserService $userService, ProvinceService $proviceRepository) {
        $this->userService = $userService;
        $this->proviceRepository = $proviceRepository;
    }
    public function index(){
        $users = $this->userService->paginate();

        $config = [
            'js'=> [
                'backend/js/plugins/switchery/switchery.js'
            ],
            'css' => [
                'backend/css/plugins/switchery/switchery.css'
            ]
        ];
      $config['seo'] = config('apps.user');
    //   dd($config['seo']);
        $template = 'backend.user.index';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'users'
        ));
    }
    public function create(){

        $provices =  $this->proviceRepository->all();
        // dd($provices);
        $config = [
            'css' => [
                'backend/select2/dist/css/select2.min.css'
            ],
            'js' => [
                'backend/select2/dist/js/select2.min.js',
                'backend/library/location.js'
            ]
        ];
        $config['seo'] = config('apps.user');
        $template = 'backend.user.create';
        return view('backend.dashboard.layout', compact(
            'template',
            'config',
            'provices'
        ));
    }
}
