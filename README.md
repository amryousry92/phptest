# phptest

Prompt: For this test use PHP to store the provided product JSON in a MySQL database. Then
call that data on an HTML front end using PHP.
Please provide us with your HTML and PHP files in a zip file, that is called the following -
<FirstName>_<LastName>_<MMDDYY>.
Notes -
Product JSON -
{
product: 􀀀{
id: 9995641551,
title: "testproduct",
body_html: "testproduct",
vendor: "mtc Dev Store",
product_type: "",
created_at: "2017-01-30T18:56:14-05:00",
handle: "testproduct",
updated_at: "2017-01-30T18:56:38-05:00",
published_at: "2017-01-30T18:55:00-05:00",
template_suffix: null,
published_scope: "global",
tags: "",
variants: 􀀀[
􀀀{
id: 35131889359,
product_id: 9995641551,
title: "blue",
price: "1.00",
sku: "1234567890",
position: 1,
grams: 0,
inventory_policy: "deny",
compare_at_price: null,
fulfillment_service: "manual",
inventory_management: null,
option1: "blue",
option2: null,
option3: null,
created_at: "2017-01-30T18:56:14-05:00",
updated_at: "2017-01-30T18:56:38-05:00",
taxable: true,
barcode: "",
image_id: null,
inventory_quantity: 1,
weight: 0,
weight_unit: "lb",
old_inventory_quantity: 1,
requires_shipping: true
},
􀀀{
id: 35131913679,
product_id: 9995641551,
title: "red",
price: "1.00",
sku: "1234567891",
position: 2,
grams: 0,
inventory_policy: "deny",
compare_at_price: null,
fulfillment_service: "manual",
inventory_management: null,
option1: "red",
option2: null,
option3: null,
created_at: "2017-01-30T18:56:38-05:00",
updated_at: "2017-01-30T18:56:38-05:00",
taxable: true,
barcode: "",
image_id: null,
inventory_quantity: 1,
weight: 0,
weight_unit: "lb",
old_inventory_quantity: 1,
requires_shipping: true
},
􀀀{
id: 35131913743,
product_id: 9995641551,
title: "green",
price: "1.00",
sku: "1234567892",
position: 3,
grams: 0,
inventory_policy: "deny",
compare_at_price: null,
fulfillment_service: "manual",
inventory_management: null,
option1: "green",
option2: null,
option3: null,
created_at: "2017-01-30T18:56:38-05:00",
updated_at: "2017-01-30T18:56:38-05:00",
taxable: true,
barcode: "",
image_id: null,
inventory_quantity: 1,
weight: 0,
weight_unit: "lb",
old_inventory_quantity: 1,
requires_shipping: true
}
],
options: 􀀀[
􀀀{
id: 11980101711,
product_id: 9995641551,
name: "color",
position: 1,
values: 􀀀[
"blue",
"red",
"green"
]
}
],
images: [ ],
image: null
}
}
Objective 1 -
● Store the newly created product json in a MySQL table called mtcproducts using PHP.
● The table has the following fields/columns:
○ product_id
○ product_name (assume this is the product title)
○ product_variant_id
○ product_variant_position
○ product_variant_color (assume this is the product variant title)
● Write a comment with what data should appear when the following MySQL query is ran
on the updated mtcproducts table:
○ SELECT * FROM mtcproducts WHERE product_variant_id = ‘54321’;
Objective 2 -
● Create a simple HTML front end that has the following:
○ Product Name will display as an H1 tag.
○ Product ID will display as an H2 tag.
○ A select dropdown that has each of the Product Variant Colors associated to this
product.
○ Dynamically display the Product Variant ID and Position in a paragraph tag
based on the user's selection.
● The data displayed on the front end must be pulled directly from the mtcproducts table
using PHP.
Objective 3 -
HINT: This objective can be completed using cURL to POST data to the Shopify API.
Notes -
Shopify API Reference - https://help.shopify.com/api/reference
Shopify Product API Reference - https://help.shopify.com/api/reference/product
Shopify Product Variant API Reference - https://help.shopify.com/api/reference/product_variant
The API Information below is all mock data, you will not get a successful connection.
Shopify API Authentication -
● Store Name - mtcDigital
● API key - 407ee273b6de38e00280693534ffedb7
● Password - ca634ded78faf36d1279ab8d47b2437b
● Shared secret - bdc5c32d3f41109ef4985cb5044c118d
● URL format - https://apikey:password@hostname/admin/resource.json
● Example URL -
https://407ee273b6de38e00280693534ffedb7:ca634ded78faf36d1279ab8d47b2437b@
mtcdigital.myshopify.com/admin/orders.json
Objective -
● Using PHP create a product using the Shopify API.
● You must create a product that has the following data:
○ Product Name: <Your First Name> <Your Last Name> Product
○ Three Size Variants, to be displayed in the following specified order: Small,
Medium, Large.
○ The price of each of the variants will be: $100.00.
● Write a comment with what the expected product API response would display.
