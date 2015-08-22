# opencart-custom-discount
Implementing your own (custom) discount extension in OpenCart e-Commerce Solution.

# Files to ADD:
<b>Note:</b>You can use any name for your custom discount extension. In this example, I used <b>my_custom_discount</b>.
<br /><br />
admin/view/template/total/<b>my_custom_discount.tpl</b><br />
admin/controller/total/<b>my_custom_discount.php</b><br />
admin/language/english/total/<b>my_custom_discount.php</b><br />
<br />
catalog/model/total/<b>my_custom_discount.php</b><br />
catalog/language/english/total/<b>my_custom_discount.php</b>

# Files to EDIT:
<b>Note:</b> For the sake of this example, files I have edited are core files.
As a good practice, you should edit files properly by the use of <i>vQmod</i> and by making your own theme for the template file.
This is advisable when you are updating your OpenCart version constantly.
<br /><br />
1. If you changed the name of the "admin" folder, then place admin files accordingly.<br />
2. If you created your own theme, then just copy the changes made from <b>catalog/view/theme/default/template/checkout/cart.tpl</b>.<br />
3. If you're using vQmod, implement the changes made in <b>catalog/controller/checkout/cart.php</b>.
<br /><br />
catalog/controller/checkout/cart.php<br />
catalog/language/english/checkout/cart.php<br />
catalog/view/theme/default/template/checkout/cart.tpl

#Output

It will be added at the bottom of already existing discount features / extensions of OpenCart.
Or, it depends on your HTML mark-up if where you place it.<br />
![alt text](screenshots/opencart-custom-discount-01.png "Included in checkout screen")
<br />
<br />
When used, you can see that it will be automatically reflected in the "order total".
<br />
![alt text](screenshots/opencart-custom-discount-02.png "Included in order total")
<br />
<br />
Will be reflected automatically in the "order confirmation total" as well.
<br />
![alt text](screenshots/opencart-custom-discount-03.png "Included in order confirmation total")
<br />
<br />
And lastly, it will be included automatically in the admin's "order summary" as well.
<br />
![alt text](screenshots/opencart-custom-discount-04.png "Included in admin order summary")

# Admin Installation

Before the custom discount extension can be used in the front-end, the admin files' purpose are to enable the custom discount for use.
So as soon as you completed all the changes and additional files, log-in to the admin panel and navigate to <b>Extensions->Order Totals</b>.
<br /><br />
From there, you can find the extension from the list as shown in this screenshot below:
<br />
You can install / uninstall the extension from here.
<br />
![alt text](screenshots/admin-opencart-custom-discount-01.png "Installation")
<br /><br />
After installing, edit your custom discount and set to "<b>Enabled</b>", then put the sorting order that should be lesser than the sorting order of the "<b>Total</b>" extension.
<br />
![alt text](screenshots/admin-opencart-custom-discount-02.png "Configuration")