<html>
 
<head>   
 
<!-- 1 -->
<link href="css/dropzone.css" type="text/css" rel="stylesheet" />
 
<!-- 2 -->
<script src="dropzone.js"></script>
 
</head>
 
<body>
 
<!-- 3 -->
<form action="upload.php" id="myAwesomeDropzone" class="dropzone"></form>
   
</body>
<script type="text/javascript">
Dropzone.options.myAwesomeDropzone = {
  paramName: "file", // The name that will be used to transfer the file
  maxFilesize: 0.7, // kB
  maxFiles:5,
  autoQueue: true,
  addRemoveLinks: true,//remove file when it's already upload
 // dictUploadCanceled: "you want to remove this files",
  dictCancelUploadConfirmation:  "Do you want to remove this file?",
  dictMaxFilesExceeded:"ไม่อนุญาตให้อัปโหลดเกิน 5 ภาพ",
  dictFileTooBig: "ไม่อนุญาตให้อัปโหลดภาพที่มีขนาดเกิน 700kb",
 
  accept: function(file, done) {
      alert('testing');
    if (file.name == "justinbieber.jpg") {
      done("Naha, you don't.");
    }
    else { done(); }
  }
};
</script>
 
</html>