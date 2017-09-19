# TaskManager

## 常用命令
<pre>
    laravel 5.4以后webpack,则编译前端文件时   npm run dev
    laravel 5.4之前gulp,编译命令 gulp
    
</pre>


## 项目小知识
<pre>
    1. 只有sass文件才需要编译，js文件拷贝即可
    2. gulp 是前端自动化构建工具，可利用gulp编译，压缩,合并，scss,可以批量压缩项目图片，可以调用各种前端依赖
       gulp 是基于nodejs的，安装gulp之前需要先安装nodejs
    3. 运行 npm run dev 以后，会将resources/assets/sass/app.scss文件中引入的依赖样式，编译成public/css/app.css文件
       如果需要分开编译，可以在resources/assets/sass目录下新增样式文件（index.scss）并修改webpack.min.js文件，设置编译后的文件 
</pre>