<?php

namespace App\Http\Controllers;

use App\Models\Topic;
use Illuminate\Http\Request;
use DB;
use Log;

class TopicController extends Controller
{
    private $topic;
    public function __construct(Topic $topic) {
        $this->topic = $topic;
    }

    public function index()
    {
        $listTopic = $this->topic->all();
        return view('admin.topic.index', compact('listTopic'));
    }


    public function add()
    {
        return view('admin.topic.add');
    }

    public function create(Request $request)
    {
        try {
            DB::beginTransaction();
            $Topic = new Topic;
            $Topic->name = $request->name;
            $Topic->description = $request->description;
            $Topic->save();
            DB::commit();
            return redirect()->route('admin.topic.index');
        } catch (\Exception $exception) {
            DB::rollBack();
            Log::error('Lỗi: ' .$exception->getMessage() .$exception->getLine());
        }
    }


    public function edit($id)
    {
        $topic = $this->topic->findOrFail($id);
        return view('admin.topic.edit', compact('topic'));
    }

    public function update(Request $request, $id)
    {
        try {
            DB::beginTransaction();
            $Topic = Topic::find($id);
            $Topic->name = $request->name;
            $Topic->description = $request->description;
            $Topic->save();
            DB::commit();
            return redirect()->route('admin.topic.index');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
    }

    public function delete($id)
    {
        try {
            DB::beginTransaction();
            // Xóa Role
            $topic = $this->topic->find($id);
            $topic->delete($id);
            DB::commit();
            return redirect()->route('admin.topic.index');
        } catch (\Exception $exception) {
            DB::rollBack();
        }
    }

    public function error()
    {
        return view('admin.error.index');
    }
}
