function countChar(val) {
    let len = val.value.length;
    if (len >= 500) {
      val.value = val.value.substring(0, 500);
    } else {
      $('#textarea-counter').text(len);
    }
  };
