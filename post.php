<html>

<head>
	<meta charset="utf-8">
	<title>0614提出課題</title>
</head>

<body>
 <p class=title>新商品〇〇：Feedback-Form</p>

 <form action="write.php" method="post">
 
 <div class="Form">
 
 <div class="Form-Item">
    <p class="Form-Item-Label">
      <span class="Form-Item-Label-Required">必須</span>お名前
    </p>
    <input type="text" id="name" name="name" class="Form-Item-Input" placeholder="例）山田太郎">
   </div>
 
  <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>EMAIL</p>
    <input type="email" id="email" name="mail" class="Form-Item-Input" placeholder="例）example@gmail.com">
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>TEL</p>
    <input type="text" id="tel" name="tel" class="Form-Item-Input" placeholder="例）000-0000-0000">
  </div>
  
  <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>これまでの投稿回数</p>
    <div class="Form-Item-Input-R" >
    <select name="num_of_inq" class="label styled-select">
      <option value="選択肢">選択肢</option>
      <option value="0回">0回（今回が初回）</option>
      <option value="1回">1回</option>
      <option value="2回">2回</option>
      <option value="3回以上">3回以上</option>
      </select>
    </div>
   </div>

   <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>購入した商品を知った背景</p>
    <div class="Form-Item-Input-R" >
      <select name="haikei" class="label styled-select">
      <option value="選択肢">選択肢</option>
      <option value="ネット検索">ネット検索</option>
      <option value="知人の紹介">知人の紹介</option>
      <option value="紹介">テレビ・新聞・雑誌</option>
      <option value="SNS広告">SNS広告</option>
      </select>
	  </div>
   </div>

   <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>購入した商品のレーティング</p>
    <div class="Form-Item-Input-R" >
    <select name="rating" class="label styled-select">
      <option value="選択肢">選択肢</option>
      <option value="星1">☆</option>
      <option value="星2">☆☆</option>
      <option value="星3">☆☆☆</option>
      <option value="星4">☆☆☆☆</option>
      <option value="星5">☆☆☆☆☆</option>
      </select>
	   </div>
   </div>

   <div class="Form-Item">
    <p class="Form-Item-Label"><span class="Form-Item-Label-Required">必須</span>商品の勧めポイント(ctrlキーで複数選択可)</p>
    <div class="Form-Item-Input-R" >
    <select name="kind[]" class="label styled-select" multiple>
      <option value="価格競争力">価格競争力がある</option>
      <option value="他にないデザイン">他にないデザイン</option>
      <option value="高性能">高性能</option>
      <option value="アフターサービスが充実">アフターサービスが充実</option>
      </select>
	  </div>
   </div>

   <div class="Form-Item">
    <p class="Form-Item-Label isMsg"><span class="Form-Item-Label-Required">任意</span>自由筆記</p>
    <textarea  name="shosai" class="Form-Item-Textarea"></textarea>
   </div>

   <input type="submit" id=submit class="Form-Btn" value="送信する">

  </div>

  </form>

  <ul>
	 <li><a href="index.php">前pageへ戻る</a></li>
  </ul>

</body>

<!-- 入力漏れチェック関数 -->
<script>
  $('#submit').on('click',function(){
    Check('#name');
    Check('#email');
    Check('#tel');

  function Check(a){
    if($(a).val() === ''){
      alert('入力漏れがあります！');
      $(a).focus();
      return false;
    }
    alert('送信完了！');
  };
  });
</script>

</html>

<style>
/* title,文字関連css */
.title{
    text-align: center;
    font-size: 20px;
    font-weight: bold;
    padding-top: 20px;
}

body{
    color:#222222;
    font-size: 16px;
    font-family: "Open Sans",'ヒラギノ角ゴ ProN W3', Hiragino Kaku Gothic ProN, "メイリオ", Meiryo, ;
}

/* 選択肢プル */
.styled-select {
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    display: inline-block;
    width: 400px;
    margin-left: 0px;
    margin: 0 0; 
    padding: 0.6em 1.5em 0.6em 0.5em; 
    cursor: pointer; 
    line-height: 1.4; 
    font-size: 0.95em; 
    font-weight: 700; 
    color: #333; 
    border-radius: 4px; 
    background-color: #f7f9fb; 
    border: solid 1px #e1e8ef; 
    box-shadow: 0 3px 3px -2px rgba(3, 29, 41, 0.15); 
    background-image: linear-gradient(45deg, transparent 50%, rgba(0,0,0,0.4) 50%),  linear-gradient(135deg, rgba(0,0,0,0.4) 50%, transparent 50%);
    background-size: 5px 5px, 5px 5px;
    background-position: calc(100% - 15px) 50%, calc(100% - 10px) 50%;
    background-repeat: no-repeat;
  }

  .styled-select:focus {
    outline: 0;
    border-color: #b0c5ff; 
  }
  
  .styled-select::-ms-expand {
    display: none;
  }

  /* 背景css*/
  .Form {
  margin-top: 80px;
  margin-left: auto;
  margin-right: auto;
  max-width: 720px;
}
@media screen and (max-width: 480px) {
  .Form {
    margin-top: 40px;
  }
}
.Form-Item {
  border-top: 1px solid #ddd;
  padding-top: 24px;
  padding-bottom: 24px;
  width: 100%;
  display: flex;
  align-items: center;
}
@media screen and (max-width: 480px) {
  .Form-Item {
    padding-left: 14px;
    padding-right: 14px;
    padding-top: 16px;
    padding-bottom: 16px;
    flex-wrap: wrap;
  }
}
.Form-Item:nth-child(5) {
  border-bottom: 1px solid #ddd;
}
.Form-Item-Label {
  width: 100%;
  max-width: 248px;
  letter-spacing: 0.05em;
  font-weight: bold;
  font-size: 18px;
}
@media screen and (max-width: 480px) {
  .Form-Item-Label {
    max-width: inherit;
    display: flex;
    align-items: center;
    font-size: 15px;
  }
}
.Form-Item-Label.isMsg {
  margin-top: 8px;
  margin-bottom: auto;
}
@media screen and (max-width: 480px) {
  .Form-Item-Label.isMsg {
    margin-top: 0;
  }
}
.Form-Item-Label-Required {
  border-radius: 6px;
  margin-right: 8px;
  padding-top: 8px;
  padding-bottom: 8px;
  width: 48px;
  display: inline-block;
  text-align: center;
  background: #5bc8ac;
  color: #fff;
  font-size: 14px;
}
@media screen and (max-width: 480px) {
  .Form-Item-Label-Required {
    border-radius: 4px;
    padding-top: 4px;
    padding-bottom: 4px;
    width: 32px;
    font-size: 10px;
  }
}
.Form-Item-Input {
  border: 1px solid #ddd;
  border-radius: 6px;
  margin-left: 40px;
  padding-left: 1em;
  padding-right: 1em;
  height: 48px;
  flex: 1;
  width: 100%;
  max-width: 410px;
  background: #eaedf2;
  font-size: 18px;
}
.Form-Item-Input-R {
  /* border: 1px solid #ddd; */
  border-radius: 6px;
  margin-left: 40px;
  padding-left: 1em;
  padding-right: 1em;
  height: 48px;
  flex: 1;
  width: 100%;
  max-width: 410px;
  /* background: #eaedf2; */
  font-size: 18px;
}

@media screen and (max-width: 480px) {
  .Form-Item-Input {
    margin-left: 0;
    margin-top: 18px;
    height: 40px;
    flex: inherit;
    font-size: 15px;
  }
}
.Form-Item-Textarea {
  border: 1px solid #ddd;
  border-radius: 6px;
  margin-left: 40px;
  padding-left: 1em;
  padding-right: 1em;
  height: 216px;
  flex: 1;
  width: 100%;
  max-width: 410px;
  background: #eaedf2;
  font-size: 18px;
}
@media screen and (max-width: 480px) {
  .Form-Item-Textarea {
    margin-top: 18px;
    margin-left: 0;
    height: 200px;
    flex: inherit;
    font-size: 15px;
  }
}
.Form-Btn {
  border-radius: 6px;
  margin-top: 32px;
  margin-left: auto;
  margin-right: auto;
  padding-top: 20px;
  padding-bottom: 20px;
  width: 280px;
  display: block;
  letter-spacing: 0.05em;
  background: #5bc8ac;
  color: #fff;
  font-weight: bold;
  font-size: 20px;
  cursor: pointer;
}
@media screen and (max-width: 480px) {
  .Form-Btn {
    margin-top: 24px;
    padding-top: 8px;
    padding-bottom: 8px;
    width: 160px;
    font-size: 16px;
    cursor: pointer;
  }
}

/* 点消し */
ul {
  list-style: none;
}
  </style>