<?php

return [
    /*
    |--------------------------------------------------------------------------
    | バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | 以下の言語行はバリデタークラスにより使用されるデフォルトのエラー
    | メッセージです。サイズルールのようにいくつかのバリデーションを
    | 持っているものもあります。メッセージはご自由に調整してください。
    |
    */

    'accepted' => ':attributeを承認してください。',
    'accepted_if' => ':otherが:valueの場合:attributeを承認してください。',
    'active_url' => ':attributeが有効なURLではありません。',
    'after' => ':attributeには:dateより後の日付を指定してください。',
    'after_or_equal' => ':attributeには:date以降の日付を指定してください。',
    'alpha' => ':attributeはアルファベットのみがご利用できます。',
    'alpha_dash' => ':attributeはアルファベットとダッシュ(-)及び下線(_)がご利用できます。',
    'alpha_num' => ':attributeはアルファベット数字がご利用できます。',
    'array' => ':attributeは配列でなくてはなりません。',
    'before' => ':attributeには:dateより前の日付をご利用ください。',
    'before_or_equal' => ':attributeには:date以前の日付をご利用ください。',
    'between' => [
        'numeric' => ':attributeは:minから:maxの間で指定してください。',
        'file' => ':attributeは:min kBから:max kBの間で指定してください。',
        'string' => ':attributeは:min文字から:max文字の間で指定してください。',
        'array' => ':attributeは:min個から:max個の間で指定してください。',
    ],
    'boolean' => ':attributeはtrueかfalseを指定してください。',
    'confirmed' => ':attributeと確認フィールドが一致していません。',
    'current_password' => 'パスワードが正しくありません。',
    'date' => ':attributeには有効な日付を指定してください。',
    'date_equals' => ':attributeには:dateと同じ日付けを指定してください。',
    'date_format' => ':attributeは:format形式で指定してください。',
    'different' => ':attributeと:otherには異なった内容を指定してください。',
    'digits' => ':attributeは:digits桁で指定してください。',
    // 'digits_between' => ':attributeは:min桁から:max桁の間で指定してください。',
    'digits_between' => ':attributeは10桁以内で指定してください。',
    'dimensions' => ':attributeの図形サイズが正しくありません。',
    'distinct' => ':attributeには異なった値を指定してください。',
    'email' => ':attributeには有効なメールアドレスを指定してください。',
    'ends_with' => ':attributeには:valuesのどれかで終わる値を指定してください。',
    'exists' => '選択された:attributeは正しくありません。',
    'file' => ':attributeにはファイルを指定してください。',
    'filled' => ':attributeに値を指定してください。',
    'gt' => [
        'numeric' => ':attributeには:valueより大きな値を指定してください。',
        'file' => ':attributeには:value kBより大きなファイルを指定してください。',
        'string' => ':attributeは:value文字より長く指定してください。',
        'array' => ':attributeには:value個より多くのアイテムを指定してください。',
    ],
    'gte' => [
        'numeric' => ':attributeには:value以上の値を指定してください。',
        'file' => ':attributeには:value kB以上のファイルを指定してください。',
        'string' => ':attributeは:value文字以上で指定してください。',
        'array' => ':attributeには:value個以上のアイテムを指定してください。',
    ],
    'image' => ':attributeには画像ファイルを指定してください。',
    'in' => '選択された:attributeは正しくありません。',
    'in_array' => ':attributeには:otherの値を指定してください。',
    'integer' => ':attributeは整数で指定してください。',
    'ip' => ':attributeには有効なIPアドレスを指定してください。',
    'ipv4' => ':attributeには有効なIPv4アドレスを指定してください。',
    'ipv6' => ':attributeには有効なIPv6アドレスを指定してください。',
    'json' => ':attributeには有効なJSON文字列を指定してください。',
    'lt' => [
        'numeric' => ':attributeには:valueより小さな値を指定してください。',
        'file' => ':attributeには:value kBより小さなファイルを指定してください。',
        'string' => ':attributeは:value文字より短く指定してください。',
        'array' => ':attributeには:value個より少ないアイテムを指定してください。',
    ],
    'lte' => [
        'numeric' => ':attributeには:value以下の値を指定してください。',
        'file' => ':attributeには:value kB以下のファイルを指定してください。',
        'string' => ':attributeは:value文字以下で指定してください。',
        'array' => ':attributeには:value個以下のアイテムを指定してください。',
    ],
    'max' => [
        'numeric' => ':attributeには:max以下の数字を指定してください。',
        'file' => ':attributeには:max kB以下のファイルを指定してください。',
        'string' => ':attributeは:max文字以下で指定してください。',
        'array' => ':attributeは:max個以下指定してください。',
    ],
    'mimes' => ':attributeには:valuesタイプのファイルを指定してください。',
    'mimetypes' => ':attributeには:valuesタイプのファイルを指定してください。',
    'min' => [
        'numeric' => ':attributeには:min以上の数字を指定してください。',
        'file' => ':attributeには:min kB以上のファイルを指定してください。',
        'string' => ':attributeは:min文字以上で指定してください。',
        'array' => ':attributeは:min個以上指定してください。',
    ],
    'multiple_of' => ':attributeには:valueの倍数を指定してください。',
    'not_in' => '選択された:attributeは正しくありません。',
    'not_regex' => ':attributeの形式が正しくありません。',
    'numeric' => ':attributeには数字を指定してください。',
    'password' => '正しいパスワードを指定してください。',
    'present' => ':attributeが存在していません。',
    'regex' => ':attributeに正しい形式を指定してください。',
    'required' => ':attributeは必ず指定してください。',
    'required_if' => ':otherが:valueの場合:attributeも指定してください。',
    'required_unless' => ':otherが:valuesでない場合:attributeを指定してください。',
    'required_with' => ':valuesを指定する場合は:attributeも指定してください。',
    'required_with_all' => ':valuesを指定する場合は:attributeも指定してください。',
    'required_without' => ':valuesを指定しない場合は:attributeを指定してください。',
    'required_without_all' => ':valuesのどれも指定しない場合は、:attributeを指定してください。',
    'prohibited' => ':attributeは入力禁止です。',
    'prohibited_if' => ':otherが:valueの場合:attributeは入力禁止です。',
    'prohibited_unless' => ':otherが:valueでない場合:attributeは入力禁止です。',
    'prohibits' => 'attributeは:otherの入力を禁じています。',
    'same' => ':attributeと:otherには同じ値を指定してください。',
    'size' => [
        'numeric' => ':attributeは:sizeを指定してください。',
        'file' => ':attributeのファイルは:sizeキロバイトでなくてはなりません。',
        'string' => ':attributeは:size文字で指定してください。',
        'array' => ':attributeは:size個指定してください。',
    ],
    'starts_with' => ':attributeには:valuesのどれかで始まる値を指定してください。',
    'string' => ':attributeは文字列を指定してください。',
    'timezone' => ':attributeには有効なゾーンを指定してください。',
    'unique' => ':attributeの値は既に存在しています。',
    'uploaded' => ':attributeのアップロードに失敗しました。',
    'url' => ':attributeに正しい形式を指定してください。',
    'uuid' => ':attributeに有効なUUIDを指定してください。',

    /*
    |--------------------------------------------------------------------------
    | Custom バリデーション言語行
    |--------------------------------------------------------------------------
    |
    | "属性.ルール"の規約でキーを指定することでカスタムバリデーション
    | メッセージを定義できます。指定した属性ルールに対する特定の
    | カスタム言語行を手早く指定できます。
    |
    */

    'custom' => [
        'password' => [
            'required' => 'パスワードを入力してください。',
            'confirmed' => 'パスワードとパスワード(再確認)が一致していません。',
            'min' => 'パスワードは8文字以上で指定してください。',
        ],
        'password_confirmation' => [
            'required' => 'パスワード(再確認)を入力してください。',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | カスタムバリデーション属性名
    |--------------------------------------------------------------------------
    |
    | 以下の言語行は、例えば"email"の代わりに「メールアドレス」のように、
    | 読み手にフレンドリーな表現でプレースホルダーを置き換えるために指定する
    | 言語行です。これはメッセージをよりきれいに表示するために役に立ちます。
    |
    */

    'attributes' => [
        'password' => 'パスワード',
        
        // プロフィール画面
        'name' => '名前',
        'email' => 'メールアドレス',
        
        // 自社情報
        'postal_code' => '郵便番号',
        'address_line1' => '住所',
        'address_line2' => '建物名',
        'issuer_name' => '会社名',
        'issuer_number' => '登録番号',
        'tel_fixed' => '固定電話',
        '携帯電話' => 'メールアドレス',
        'responsible_name' => '担当者',
        
        // 領収書
        'issued_at' => '日付',
        'customer_name' => '顧客名',
        'receipt_note' => '但し書き',
        'payment_method' => '支払い方法',
        // ----- `/ReceiptRequest.php`の`withValidator`に記載
        // 'bento_brands' => 'ブランド',
        // 'bento_names' => '品目',
        // 'bento_fees' => '税込',
        // 'tax_rates' => '消費税',
        // 'bento_quantities' => '数量',
        // 'unit_prices' => '単価(税抜)', // 自動計算
        // 'amounts' => '金額', // 自動計算
        // ----- 
        'subtotal' => '小計', // 自動計算
        'tax_total' => '消費税の合計', // 自動計算
        'total' => '合計金額', // 自動計算
        'remarks' => '備考',
    ],
];
