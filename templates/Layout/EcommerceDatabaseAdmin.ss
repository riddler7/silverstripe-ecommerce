<h3>Current cart tasks</h3>
<p><a href="{$BaseHref}shoppingcart/clear">Clear the current shopping cart</a></p>
<p><a href="{$BaseHref}shoppingcart/debug">Debug the shopping cart</a></p>
<!--  <p>Load test products and categories</p>  -->

<!--
<h3>Delete actions - be careful</h3>
<p><a href="$Link(deleteproducts)">Delete all products</a></p>-->
<!--  <p>Delete all product categories</p> -->
<!--  <p>Delete all sales data (Orders, Items, Members, Addresses, etc)</p> -->
<h3>Build Tasks</h3>
<p><a href="{$BaseHref}CartCleanupTask">Cleanup old carts</a> - removes abandoned carts</p>

<p><a href="{$BaseHref}dev/tasks/DeleteEcommerceOrders">Delete All Orders</a> - removes all orders, modifiers, and payments from the database.</p>
<p><a href="{$BaseHref}dev/tasks/DeleteEcommerceProducts">Delete All Products</a> - removes all products from the database.</p>
<p><a href="{$BaseHref}dev/tasks/RecalculateAllOrdersTask">Recalculate All Orders</a> - recalculates all order values. Warning: this will overwrite any historical values.</p>

<h3>Ecommerce Unit Tests</h3>
<p><a href="{$BaseHref}dev/tests/module/$EcommerceFolder">Run all ecommerce unit tests</a></p>