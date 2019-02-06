<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Thread;
class ThreadController extends Controller
{
    // スレ一覧
    public function index()
    {
        // touchesプロパティにより、新規発言順に並べる
        $threads = Thread::orderBy('updated_at', 'desc')->get();
        return view('threads', compact('threads'));
    }

    // スレッドIDから投稿一覧を表示
    public function show($id)
    {
        $thread = Thread::findOrFail($id);
        return view('posts', compact('thread'));
    }
    // 新規スレ生成
    public function store(Request $request)
    {
        $rule = [
            'title' => ['required', 'string'], // スレ名
        ];
        $this->validate($request, $rule);

        $data = $request->all();
        Thread::create($data);

        return redirect()->to('/thread/');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }





    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
