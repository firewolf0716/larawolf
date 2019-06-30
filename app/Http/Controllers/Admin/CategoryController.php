<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function add(Request $request)
    {
        $title  = $this->model->getTitle();
        $fields = $this->model->getFields();
        $actions = $this->model->getActions();

    	if ( $request->isMethod('post')) {

    		$this->validateRule( $request);
    		$data = $request->all();
    		$this->model->name = $data['name'];
    		$this->model->description = $data['description'];
    		$this->model->url = $data['url'];
    		$this->model->save();
            return redirect('admin/category/list')
                    ->with('flash_message_success', 'Category Added Successfully!');
    	}

    	return view('admin.categories.add')
            ->with(compact('title', 'fields', 'actions'));
    }

    public function edit(Request $request, $id = null)
    {
        $title  = $this->model->getTitle();
        $fields = $this->model->getFields();
        $actions = $this->model->getActions();
        $detail = $this->model->find($id);

        if ( $request->isMethod('post')) {

            $this->validateRule( $request);
            $data = $request->all();
            $detail->update($data);

            return redirect('admin/category/list')
                    ->with('flash_message_success', 'Category Updated Successfully!');
        }
        
        return view('admin.categories.edit')
                ->with(compact('title', 'fields', 'actions', 'detail'));
    }

    public function show($id = null)
    {
        if (!empty($id)) {
            $title = $this->model->getTitle();
            $columns = $this->model->getColumns();
            $detail = $this->model->find($id);
            return view('admin.categories.show')
                ->with(compact('title', 'columns', 'detail'));
        }
    }

    public function delete($id = null)
    {
        if (!empty($id)) {
            $this->model->find($id)->delete();
            return redirect()->back()
                    ->with('flash_message_success', 'Category deleted Successfully!');
        }
    }

    public function list()
    {
        $title = $this->model->getTitle();
        $columns = $this->model->getColumns();
        $actions = $this->model->getActions();
        $all = $this->model->get();
        $all = json_decode(json_encode($all));

        return view('admin.categories.list')
            ->with(compact('title', 'columns', 'actions', 'all'));
    } 
}
