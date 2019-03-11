javascript:ECMAscript+BOM+DOM
1、弹窗  
alert()、confirm()、 prompt()；
2、获取表单
document.forms[1]
3、javascript 变量命令
 只有一种数据类型 var---弱类型、一个变量可以定义数字与变量
有时不需要用';'结束也不会报错。
4、dom=document object model 文档对象模型
节点.hasChildNode()           是否有子节点
节点.childNodes[i]            第i个子元素  
节点.firstChild               第一个子元素
节点.lastChild                最后一个子元素
节点.nodeName                 节点名称
节点.nodeType                 节点类型（1，节点节点，2、文本节点，3、属性节点）
节点.nodeValue                节点值
节点.getAttributeNode('id')   查找名称为ID 的属性节点
父节点.replaceChild(newchild,oldchild) 替换节点(父节点来调用)
a.appendChild(b)            b节点追加到a节点后面
a.parentNode                a的父亲节点
getAttributeNode(属性名)    方法从当前元素中通过名称获取属性节点
getAttribute(属性名)        方法返回指定属性名的属性值
setAttribute(属性名，属性值)方法添加指定的属性，并为其赋指定的值。 
createElement(标签名)       创建新的元素节点
createTextNode(文本内容)    创建文本节点
createAttribute(属性名)     创建新的 Attr 节点
元素节点.setAttributeNode(属性节点) 向一个元素节点添加一个属性节点
父节点.insertBefore(新节点,目标节点)  方法在您指定的已有子节点之前插入新的子节点
当前节点.nextSibling  属性返回指定节点之后紧跟的节点，在相同的树层级中
当前节点.priviousSibling  属性返回指定节点前一个节点，在相同的树层级中
父节点.reomveChild（子节点）    删除子节点。
节点.innerHTML        属性设置或返回表格行的开始和结束标签之间的 HTML。
5、window.showModalDialog('弹出窗口URL'，window,"弹出窗口样式")  //方法用来创建一个显示HTML内容的模态对话框。
   window.showModelessDialog()     //方法用来创建一个显示HTML内容的非模态对话框。
6、几个例子：
    A、window.open(url,title,control),打开一个窗口
    B、通过按钮的click事件可以提交表单，
        ob1.onclick=function{document.getForms[0].submit();}