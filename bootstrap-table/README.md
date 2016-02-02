# Boostrap Table 的使用

## 尚未解决的问题
1. 当分页过程时，使用省略号显示；
2. ajax 的常用操作封装

## 笔记

1. 事件的使用方法
https://github.com/wenzhixin/bootstrap-table/issues/1785


data-escape="true"
参照：https://github.com/wenzhixin/bootstrap-table/issues/1049

可以防止 XSS 注入，在开发版中存在，但是稳定版还没有更新。

## 总结

对 Bootstrap-table 的学习还没有结束，比如对相关扩展的学习，尤其是对搜索这一部分。

四个部分：
1. 表格参数
2. 列参数
3. 事件
4. 方法

已提供的功能：
1. 简单搜索
2. 表格刷新
3. 列可见性切换
4. 数据导出（自行完成手工触发导出）
5. 行选择
6. 点击选择行
7. 列排序
8. 操作列的封装
9. 分页的提供

一些良好的例子：
1. 官网示例（包括jsFiddle上的例子）
2. 官方 CRUD 例子的实现
3. Custom Toolbar 自定义搜索的实现

几个好用的选项：
1. 表选项
    1.1 data-cache 是否缓存数据，为保证每次刷新都是最新的内容，建议设置为 false
    1.2 data-query-params-type 查询参数，借此可以实现自定义查询
    1.3 data-response-handler 响应数据的处理，在显示数据前可以对数据格式进行调整
    1.4 data-unique-id 行键值，可以方便对指定行进行删除和获取等等操作
    1.5 data-url 数据来源
    1.6 data-sort-name 和 data-sort-order 默认搜索条件
    1.7 data-side-pagination 本地数据或服务器数据分页，一般是 server
    1.8 data-click-to-select 点击选中该行
    1.9 data-toolbar 自定义工具栏

2. 列选项
    2.1 data-checkbox 设置该列为 checkbox
    2.2 data-field 列明
    2.3 data-title 列的标题
    2.4 data-sortable 是否可以排序
    2.5 data-formatter 格式化该列数据
    2.6 data-events 绑定一些事件，如操作一列的增删改等等
    2.7 

3. 事件
    3.1 check.bs.table、uncheck.bs.table、check-all.bs.table、uncheck-all.bs.table 事件
    
4. 方法
    4.1 getSelections 获取选中的行，可以实现一些批量操作
    4.2 getData 获取当前页面的数据
    4.3 getRowByUniqueId 通过 uniqueId 获取该行数据
    4.4 remove 删除指定的行数据
    4.5 removeByUniqueId 根据 uniqueId 删除数据
    4.6 refresh 重新刷新表格
    4.7 check、uncheck、checkBy、uncheckBy 选中或不选中一些行

使用方法：

表和列属性的使用方法都有两种：
第一种
<table data-toggle="table"
       data-url="data.json">
    <thead>
        <tr>
            <th data-field="id" data-sortable="true">编号</th>
            <th data-field="name">商品名称</th>
            <th data-field="price">价格</th>
        </tr>
    </thead>
</table>

第二种
<table id="table">

</table>

<script>
$('#table').bootstrapTable({
    url: 'data.json',
    columns: [
        {
            field: 'id',
            title: '编号',
            sortable: true
        },
        {
            field: 'name',
            title: '商品名称'
        },
        {
            field: 'price',
            title: '价格'
        }
    ]
});
</script>

## 还没有学习的内容
1. bootstrap-table 扩展





