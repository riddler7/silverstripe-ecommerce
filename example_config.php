<?php
/**
 * Example eCommerce configuration file.
 *
 * This file is tested in the 'EcommerceTest' unit test.
 *
 * copy the lines below to your mysite/_config.php file and set as required.
 */

// * * * NON-ECOMMERCE SETTINGS
Payment::set_site_currency('NZD');
Geoip::$default_country_code = "NZ";
i18n::set_locale('en_NZ');
setlocale (LC_TIME, 'en_NZ@dollar', 'en_NZ.UTF-8', 'en_NZ', 'nz', 'nz');

// * * * ECOMMERCE I18N SETTINGS
EcommerceCurrency::setDecimalDelimiter('.'); //for Money formating
EcommerceCurrency::setThousandDelimiter(','); //for Money formating
Object::useCustomClass('SS_Datetime','I18nDatetime', true);

// * * * SHOPPING CART AND ORDER
Order::set_email("sales@myshop.com");
Order::set_receipt_subject("Thank you for your order at www.myshop.com - Order #%d");
Order::set_modifiers(array("FlatTaxModifier", "SimpleShippingModifier"));

Order::set_table_overview_fields(array('Total' => 'Total','Status' => 'Status'));//
Order::set_maximum_ignorable_sales_payments_difference(0.001);//sometimes there are small discrepancies in total (for various reasons)- here you can set the max allowed differences
Order::set_order_id_start_number(1234567);//sets a start number for order ID, so that they do not start at one.

Order::set_cancel_before_payment(false);
Order::set_cancel_before_processing(false);
Order::set_cancel_before_sending(false);
Order::set_cancel_after_sending(false);

OrderForm::set_user_membership_optional(); //optional for user to become a member
OrderForm::set_force_membership(); //all users must become members if true, or won't become members if false

OrderManipulation::set_allow_cancelling(); //shows a cancel button on the order page
OrderManipulation::set_allow_paying(); //shows a payment form

// * * * PRODUCTS
ProductsAndGroupsModelAdmin::set_managed_models(array("Product", "ProductGroup","ProductVariation"));
Product_Image::set_thumbnail_size(140, 100);
Product_Image::set_content_image_width(200);
Product_Image::set_large_image_width(200);
ProductGroup::set_include_child_groups(true);
ProductGroup::set_must_have_price(true);
ProductGroup::set_sort_options( array('Title' => 'Alphabetical','Price' => 'Lowest Price'));

// * * * CHECKOUT
ExpiryDateField::set_short_months(true); //uses short months (e.g. Jan instead of january) for credit card expiry date.
OrderFormWithoutShippingAddress::set_fixed_country_code("NZ"); //country is fixed
OrderFormWithoutShippingAddress::set_postal_code_url("http://maps.google.com"); //link that can be used to check postal code
OrderFormWithoutShippingAddress::set_postal_code_label("click here to check your postal code"); //label for link that can be used to check postal code
OrderFormWithoutShippingAddress::set_login_invite_alternative_text('<a href="http://www.mysite.com/Security/login/?BackURL=">If you are a member then please log in.</a>'); //label for link that can be used to check postal code

// * * * MEMBER
EcommerceRole::set_group_name("Customers");

// * * * MODIFIERS
FlatTaxModifier::set_tax("0.15", "GST", $exclusive = false);
SimpleShippingModifier::set_default_charge(10);
SimpleShippingModifier::set_charges_for_countries(array('US' => 10,'NZ' => 5));
TaxModifier::set_for_country($country = "NZ", $rate = 0.15, $name = "GST", $inclexcl = "inclusive");

// * * * HELP
Product::set_global_allow_purchase(false); //stops the sale of all products