<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use App\Models\Customer;
use App\Models\Like;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("customer.index");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function process(Request $request)
    {
        // バリデーション
        $validator = Validator::make($request->all(), [
            'customer_name' => 'required',
            'sex' => 'required',
            'age' => 'required',
            'checkbox' => 'required',
            'description' => 'required',
        ]);
        // バリデーション:エラー
        if ($validator->fails()) {
            return redirect()
                ->route('contact')
                ->withInput()
                ->withErrors($validator);
        }
        // 好みのジャンルが入ったデータを配列形式に加工['1,2,3,']->[1,2,3]
        $likes = explode(",", $request->input('checkbox')[0]);

        // create()は最初から用意されている関数
        // 戻り値は挿入されたレコードの情報
        $result = Customer::create($request->all());

        //customersテーブルの主キーを取得
        $customer_id = $result->id;

        // likes テーブルに別々のレコードで保存
        foreach ($likes as $like) {
            $like_result = new Like();
            $like_result->fill(['customer_id' => $customer_id, 'like' => $like]);
            $like_result->save();
        }

        // ルーティング「todo.index」にリクエスト送信（一覧ページに移動）
        return redirect()->route('complete');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function complete()
    {
        return view("customer.complete");
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
