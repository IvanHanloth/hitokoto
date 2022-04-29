# 简介
简易的一言程序接口+前端源码  
## 环境依赖
php5.6+
# 演示站
http://hitokoto.hanloth.cn/
## 使用方法
- 上传源码至服务器
- 填写config.php中网站名称、语言（en-英语 cn-中文）即可
- **注意！本程序不能直接置于二级目录运行，如需置于二级目录请自行更改static/js/script.js第8行的接口**
## 一言内容
英文版一言内容来自en.txt，可自行修改，一行一个一言  
中文本一言内容来自cn.txt，可自行修改，一行一个一言  
欢迎提交pull requests来更新本仓库中的一言文件
## API接口
访问首页/?type=json即可获取json格式一言，具体如下：{"code":200,"text":"宁可失败在你喜欢的事情上，也不要成功在你所憎恶的事情上。\r\n"}
## 程序截图
![](https://img.hanloth.cn/?/images/2022/04/30/E25dY0c7ML/%E6%8D%95%E8%8E%B7.PNG)
![](https://img.hanloth.cn/?/images/2022/04/30/43dMV9V6pW/%E6%8D%95%E8%8E%B72.PNG)
## 引用
本程序前端视觉设计来自站长之家
## 更新日志
v1.0（更新于2022/4/30）
- 一言上线
