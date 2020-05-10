function confirm() {
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