<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Models\Link;
use App\Models\Feature;

use App\Providers\UploadsManager;
class LinkController extends Controller
{
	protected $manager;

	public function __construct(UploadsManager $manager)
	{
		$this->manager = $manager;
	}

    public function home(Request $request) {
	    $links = Link::all();
	    $feaes = Feature::all();
	    $folder = $request->get('folder');
		$data = $this->manager->folderInfo($folder);
    	return view('home', compact('links','feaes'),$data);
    }

    public function index() {
    	if(Auth::check()) {
	    	$links = Link::all();
			return view('links.index', compact('links'));
    	} else {
			return redirect('login');
		}
    }

    public function edit($id) {
		if(Auth::check()) {
			$link = Link::findOrFail($id);
			return view('links/edit',compact('link'));
		} else {
			return redirect('login');
		}
	}

	public function update(Request $request, $id) {
		$link = Link::findOrFail($id);
		$link->link_href = $request->link_href;
		if ($link->link_href != null) {
			$link->save();
			session()->flash('info','链接修改成功');
			return redirect('links');
		} else {
			session()->flash('danger','链接不能为空');
			return redirect('links');
		}
	}
}
