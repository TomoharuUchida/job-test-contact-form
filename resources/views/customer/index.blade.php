<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div style="margin:15px;">
        <h2>お問い合わせフォーム</h2>
        <div>
            <p>お名前</p>
            <div>
                <input type="text" id="name" name="customer_name">
            </div>
            <p>性別</p>
            <div>
                <input type="radio" id="man" name="sex" value="1">
                <label for="man">男性</label>
                <input type="radio" id="woman" name="sex" value="2">
                <label for="woman">女性</label>
                <input type="radio" id="other" name="sex" value="3">
                <label for="other">どちらも選ばない</label>
            </div>
            <p>年代</p>
            <div>
                <label for="age"></label>
                <select name="age" id="age">
                    <option value="">--該当するものを選んでください--</option>
                    <option value="10">10代</option>
                    <option value="20">20代</option>
                    <option value="30">30代</option>
                    <option value="40">40代</option>
                    <option value="50">50代</option>
                    <option value="60">60代以上</option>
                </select>
            </div>
            <p>好きなジャンル</p>
            <div>
                <input type="checkbox" id="japanese" name="foods" value="1">
                <label for="japanese">和食</label>
                <input type="checkbox" id="western" name="foods" value="2">
                <label for="western">洋食</label>
                <input type="checkbox" id="chinese" name="foods" value="3">
                <label for="chinese">中華</label>
                <input type="checkbox" id="ethnic" name="foods" value="4">
                <label for="ethnic">エスニック</label>
            </div>
            <p>お問い合わせ内容</p>
            <div>
                <textarea name="description" id="description" cols="30" rows="10"></textarea>
            </div>
            <button type="button" class="btn btn-primary form-btn" data-toggle="modal"
                data-target="#exampleModalCenter">入力内容を確認する</button>

        </div>

        {{-- モーダル画面 --}}
        <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
            aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalCenterTitle">確認画面</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{ route('process') }}" method="POST">
                            @csrf
                            <div class="form-group row">
                                <p class="col-sm-4 col-form-label">お名前<span class="badge badge-danger ml-1">必須</span>
                                </p>
                                <div class="col-sm-8">
                                    <p class="modal-name"></p>
                                    <input class="modal-name" type="hidden" name="customer_name" value="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <p class="col-sm-4 col-form-label">性別<span class="badge badge-danger ml-1">必須</span>
                                </p>
                                <div class="col-sm-8">
                                    <p class="modal-sex"></p>
                                    <input class="modal-sex" type="hidden" name="sex" value="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <p class="col-sm-4 col-form-label">年代<span class="badge badge-danger ml-1">必須</span>
                                </p>
                                <div class="col-sm-8">
                                    <p class="modal-age"></p>
                                    <input class="modal-age" type="hidden" name="age" value="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <p class="col-sm-4 col-form-label">好きなジャンル（複数選択可）<span
                                        class="badge badge-danger ml-1">必須</span></p>
                                <div class="col-sm-8">
                                    <p class="modal-checkbox"></p>
                                    <input class="modal-checkbox" type="hidden" name="checkbox[]" value="">
                                </div>
                            </div>

                            <div class="form-group row">
                                <p class="col-sm-4 col-form-label">お問い合わせ内容<span
                                        class="badge badge-danger ml-1">必須</span>
                                </p>
                                <div class="col-sm-8">
                                    <p class="modal-description"></p>
                                    <input class="modal-description" type="hidden" name="description"
                                        value="">
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">修正する</button>
                                <button type="submit" class="btn btn-primary">送信</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"
        integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"
        integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous">
    </script>
    <script src="{{ asset('/js/main.js') }}"></script>
</body>

</html>
