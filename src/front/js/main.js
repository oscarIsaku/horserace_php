function horse_confirm() {
  var search = document.horsename.horse.value;
  search = (search == null) ? "" : search;
  if (search == "") {
    alert('馬名を入力してください。');
    document.horsename.horse.focus();
    return;
  } else if (search.match(/^[ァ-ヶー]+$/)) {
    if (search.length > 9) {
      alert('9文字以内で入力してください。');
      document.horsename.horse.focus();
      return;
    }
  } else {
    alert('全角カタカナで入力してください。');
    document.horsename.horse.focus();
    return;
  }
  document.horsename.submit();
}

function mail_confirm() {
  var send = document.mailform.mail.value;
  var regexp = /^[A-Za-z0-9]{1}[A-Za-z0-9_.-]*@{1}[A-Za-z0-9_.-]{1,}\.[A-Za-z0-9]{1,}$/;
  if (send == "") {
    alert('メールアドレスを入力してください。');
    document.mailform.mail.focus();
    return;
  } else if (!regexp.test(send)) {
    alert('メールアドレスを正しく入力してください。');
    document.mailform.mail.focus();
    return;
  } 
  document.mailform.submit();
}