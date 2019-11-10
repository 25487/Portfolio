function test(){
 url = "https://www.google.de//images/branding/googlelogo/2x/googlelogo_color_272x92dp.png";
 img = '<img src="'+url+'">';
 popup = window.open();
 popup.document.write(img);
 popup.print();
 }
