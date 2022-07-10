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
        <h1 class="text-center mt-2 mb-5">お問い合わせ一覧</h1>
        <a href="{{ route('contact') }}" class="btn btn-link" style="margin-top:5px; ">入力フォームへ戻る</a>
        <div>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">お名前</th>
                        <th scope="col">性別</th>
                        <th scope="col">年代</th>
                        <th scope="col">好きなジャンル</th>
                        <th scope="col">内容</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($customers as $customer)
                        <tr>
                            <th scope="row">{{ $customer->id }}</th>
                            <td>{{ $customer->customer_name }}</td>
                            <td>
                                <?php
                                if ($customer->sex === 1) {
                                    echo '男性';
                                } elseif ($customer->sex === 2) {
                                    echo '女性';
                                } elseif ($customer->sex === 3) {
                                    echo 'どちらも選ばない';
                                }
                                ?>
                            </td>
                            <td>
                                <?php
                                if ($customer->age === 60) {
                                    echo "{$customer->age}代以上";
                                } else {
                                    echo "{$customer->age}代";
                                }
                                ?>
                            </td>
                            <td>あとで表示</td>
                            <td>{{ $customer->description }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
