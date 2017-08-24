<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Auth;
use App\Models\Feature;

class FeatureController extends Controller
{
    public function index() {
		$feaes = Feature::paginate(4);
		return view('features.index',compact('feaes'));
	}

	public function create() {
		if(Auth::check()) {
			return view('features.create');
		} else {
			return redirect('login');
		}
	}

	public function store(Request $request) {
		$fea = new Feature;
		$fea->fea_title = $request->fea_title;
		$fea->fea_content = $request->fea_content;
		if ($fea->fea_title != null && $fea->fea_content != null) {
			if (Feature::where(['fea_title'=> $fea->fea_title])->first()) {
				session()->flash('danger','功能已经存在');
				return redirect('fea_create');
			} else {
				$fea->save();
				session()->flash('info','介绍添加成功');
				return redirect('feature');
			}
			
		} else {
			session()->flash('danger','功能和介绍不能为空');
			return redirect('fea_create');
		}
	}

	public function show($id) {
		$fea = Feature::findOrFail($id);
		return view('features/show',compact('fea'));
	}

	public function edit($id) {
		if(Auth::check()) {
			$fea = Feature::findOrFail($id);
			return view('features/edit',compact('fea'));
		} else {
			return redirect('login');
		}
	}

	public function update(Request $request, $id) {
		$fea = Feature::findOrFail($id);
		$fea->fea_title = $request->fea_title;
		$fea->fea_content = $request->fea_content;
		if ($fea->fea_title != null && $fea->fea_content != null) {
			$fea->save();
			session()->flash('info','介绍修改成功');
			return redirect('feature');
		} else {
			session()->flash('danger','功能和介绍不能为空');
			return redirect('feature');
		}
	}

	public function destroy($id) {
		$fea=Feature::findOrFail($id);
		$fea->delete();
		session()->flash('info','介绍删除成功!');
		return redirect('feature');
	}
}
