<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>お問い合わせ 一覧</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>

<body>
    <div class="text-center">
        <h2>お問い合わせ一覧 <small class="text-muted">好きなジャンル基準</small></h2>
        <a href="{{ route('contact') }}" class="btn btn-link" style="margin-top:5px; ">入力フォームへ戻る</a>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">好きなジャンル</th>
                        <th scope="col">お名前</th>
                        <th scope="col">性別</th>
                        <th scope="col">年代</th>
                        <th scope="col">内容</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($likes as $like)
                        <tr>
                            <th scope="row">{{ $like->id }}</th>
                            <td>{{ $like->kind->kind }}</td>
                            <td>{{ $like->customer->customer_name }}</td>
                            <td>
                                <?php
                                if ($like->customer->sex === 1) {
                                    echo '男性';
                                } elseif ($like->customer->sex === 2) {
                                    echo '女性';
                                } elseif ($like->customer->sex === 3) {
                                    echo 'どちらも選ばない';
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if ($like->customer->age === 60) {
                                    echo "{$like->customer->age}代以上";
                                } elseif ($like->customer->age === null) {
                                    echo '';
                                } else {
                                    echo "{$like->customer->age}代";
                                }
                                ?>
                            </td>
                            <td>{{ $like->customer->description }}</td>
                            <td>
                                <form action="{{ route('destroy', $like->id) }}" method="POST">
                                    @method('delete')
                                    @csrf
                                    <button type="submit" class="btn btn-danger">削除</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
