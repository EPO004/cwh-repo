function Submit(){
	if(!confirm('آیا از صحت اطلاعات خود اطمینان دارید؟')){
		return false;
	}
	else{
		alert('.پیام شما با موفقیت ارسال شد و بزودی به شما پاسخ داده خواهد شد');
		return true;
	}
}
