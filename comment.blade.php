<html>
<body>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/query.min.js">
</script>
<style>

* {
  box-sizing: border-box;
}

input[type=submit] {
  background-color: red;
  color: white;
  border: none;
  border-radius: 10px;
    font-size:20px;
}
p{
color:grey;
}

</style>
</head>
<form>
<br>
<textarea rows="10" cols="80" placeholder="Type a comment ..." style="border-radius:10px">
</textarea> <br> <br>
<input type="submit" value="Post Comment">
<br>
<br>
<h4>
1. Sherwyn Soff <br>
<p>
Lorem ipsum dolor sit amet,consectetur adipiscing  <br>
elit,sed do eiusmod,tempor incididunt ut labore et dolore <br>
</p>
</h4>
<button type="button" 
        id="testBtn" 
        class="btn btn-success glyphicon glyphicon-thumbs-up" 
        data-loading-text=" ... ">
    4</button>
<button type="button" id="testBtnDown" class="btn btn-success glyphicon glyphicon-thumbs-down" 
data-loading-text=" ... ">
    4</button>
</form> 
<script>
$('#testBtn').click(function () {
    var cnt=4;
    var btn = $(this);
    btn.button('loading');
    setTimeout(function () {
        cnt++;
        btn.button('reset');
        btn.text('  ' + cnt);
    }, 1000);
 });

$('#testBtnDown').click(function () {
    var cnt=4;
    var btn = $(this);
    btn.button('loading');
    setTimeout(function () {
        if (cnt > 0) {
            cnt--;
        }
        btn.button('reset');
        btn.text('  ' + cnt);
    }, 1000);
 });
 </script>
</body>


</html>