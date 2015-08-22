# opencart-custom-discount
Implementing your own (custom) discount in OpenCart e-Commerce Solution.

# Added files:

admin/view/template/total/<b>my_custom_discount.tpl</b><br />
admin/controller/total/<b>my_custom_discount.php</b><br />
admin/language/english/total/<b>my_custom_discount.php</b><br />
<br />
catalog/model/total/<b>my_custom_discount.php</b><br />
catalog/language/english/total/<b>my_custom_discount.php</b>

# Edited files:
<b>Note:</b> For the sake of this example, files I have edited are core files.
You must edit files properly by the use of vQmod and by making your own theme for the template file.
<br />
If you changed the name of the "admin" folder, then place admin files accordingly.
<br /><br />
catalog/controller/checkout/cart.php<br />
catalog/language/english/checkout/cart.php<br />
catalog/view/theme/default/template/checkout/cart.tpl

#Output

It will be added at the bottom of already existing discount features of OpenCart.<br />
![alt text](screenshots/opencart-custom-discount-01.png "Included in checkout screen")
<br />
<br />
When used, you can see that it will automatically reflected in the order total.
<br />
![alt text](screenshots/opencart-custom-discount-02.png "Included in order total")
<br />
<br />
Automatically added in order confirmation total as well.
<br />
![alt text](screenshots/opencart-custom-discount-03.png "Included in order confirmation total")
<br />
<br />
And lastly, included in the admin's order summary as well.
<br />
![alt text](screenshots/opencart-custom-discount-04.png "Included in admin order summary")