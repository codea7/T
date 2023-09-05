<!DOCTYPE html>
<html>
<head>
  <title></title>
</head>
<body>
  <script>
  // 获取当前链接中的参数值
  function getParameterByName(name) {
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
        results = regex.exec(window.location.href);
    if (!results) return null;
    if (!results[2]) return '';
    return decodeURIComponent(results[2].replace(/\+/g, " "));
  }

  // 构建目标链接，并跳转
  function redirectToTarget() {
    var keyParam = getParameterByName('k');
    if (keyParam) {
      var targetUrl = 'http://a.xn--5nq526jia151m.net/z.php?k=' + keyParam;
      window.location.href = targetUrl;
    } else {
      // 如果没有找到参数，则可以执行其他操作或给出提示
      alert('未找到参数 key。');
    }
  }

  // 页面加载时调用跳转函数
  redirectToTarget();
  </script>
</body>
</html>
