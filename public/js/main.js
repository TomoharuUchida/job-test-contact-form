$('.form-btn').click(function() {

  const name = $('input[name="customer_name"]').val();
  const sex = $('input[name="sex"]:checked').val();
  const age = $('[name="age"]').val();
  const description = $('textarea[name="description"]').val();
  const inputContents = description.replace(/\r?\n/g, '<br />');

    // モーダル表示用の変数
    let displaySex
    if (sex === '1') {
        displaySex = "男性"
    } else if (sex === '2') {
        displaySex = "女性"
    } else if(sex === '3') {
        displaySex ="どちらも選ばない"
    }

    let displayAge = age === '60' ? `${age} 代以上` :`${age} 代`

    // valueとtextで別の変数を使う
    $('.modal-name').text(name).val(name);

    $('.modal-sex').val(sex);
    $('.modal-sex').text(displaySex);

    $('.modal-age').val(age);
    $('.modal-age').text(displayAge);

    $('.modal-description').html(inputContents).val(description);

    // チェックボックスは複数選択可なので、配列に格納
    const checkbox = [];
    $('input[name="foods"]:checked').each(function() {
        checkbox.push($(this).val());
        $('.modal-checkbox').val(checkbox);
    });

    // モーダル表示用にもともとのvalueを変換した配列を作成
    const displayCheckbox = checkbox.map(function (item) {
        if (item === "1") {
            item = "和食"
            return item
        } else if (item === "2") {
            item = "洋食"
            return item
        } else if (item === "3") {
            item = "中華"
            return item
        } else {
            item = "エスニック"
            return item
        }
    })
    console.log(checkbox)
    $('.modal-checkbox').text(displayCheckbox);
});
