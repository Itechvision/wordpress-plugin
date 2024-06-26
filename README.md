# Mastercard Payment Gateway Services module for WooCommerce

## Compatibility
The module has been tested with the WooCommerce versions:

- 6.8.2
- 6.9.4
- 7.0.1 
- 7.1.1  
- 7.2.3
- 7.3.0
- 7.4.1 
- 7.5.1 
- 7.6.1 
- 7.7.2

The module has been tested with the WordPress versions:

- 5.2.4
- 5.3.2
- 5.6
- 5.7.2
- 5.9.1
- 6.0.3
- 6.1.2
- 6.2.2

## Customer Information Shared with Gateway

### This module shares the following customer information with the gateway:

- Customer Billing and Shipping Address
- Customer Name
- Customer Phone Number
- Customer Email Address
- Cart Line Items (optional)

## Feature Support

WooCommerce Mastercard Payment Gateway Service module supports the following list of features:

- Card Payments
- Alternative Payment Methods
- Hosted Session
- Hosted Checkout
- Full Refunds
- Partial Refunds
- 3DSv1
- 3DSv2
- Tokenization

## Documentation
The official documentation for this module is available on [https://mpgs.fingent.wiki/target/woocommerce-mastercard-payment-gateway-services/installation](https://mpgs.fingent.wiki/target/woocommerce-mastercard-payment-gateway-services/installation/)

## Support
For customer support:[https://mpgsfgs.atlassian.net/servicedesk/customer/portals](https://mpgsfgs.atlassian.net/servicedesk/customer/portals/)

## Obtain the module
You can obtain the module by downloading a release from: https://github.com/Mastercard-Gateway/gateway-woocommerce-module/releases
## Installation of Module
To use WooCommerce MPGS for WordPress, you need to install both the MasterCard Payment Gateway Services module and the WooCommerce module. 
### Steps to install WooCommerce for WordPress:
Follow the below steps:
1. Connect to the office of your shop with the available admin credentials.
2. Go to **Plugins > Add New** on your WordPress site.
3. Enter **WooCommerce** in the Search Plugins bar. 
![image](https://github.com/Itechvision/wordpress-plugin/assets/46921821/d11838d7-0fa8-437f-a86a-d32816e111dd)

4. Click **Install Now** and **Activate**.
![image](https://github.com/Itechvision/wordpress-plugin/assets/46921821/920a78a7-44ae-4f0a-b168-7863899cd020)

5. Once the installation is complete, we need to configure WooCommerce as per the steps in https://docs.woocommerce.com/document/woocommerce-setup-wizard/
### Steps to install MasterCard Payment Gateway Services for WordPress
Follow the below steps:
1. There are two ways to install the plugin into WordPress, either:
1.1 Download the gateway-woocommerce-module plugin zip file from https://github.com/Mastercard-Gateway/gateway-woocommerce-module/releases and extract it to the /wp-content/plugins/ directory,
**or**
1.2. Connect to the office of your shop with the available admin credentials and install the plugin through the WordPress plugins screen directly.
Goto: Admin => Plugins => Installed Plugins => Click on 'Add New' => Then in the Top click on the "Upload Plugin" button.
![image](https://github.com/Itechvision/wordpress-plugin/assets/46921821/92af6eba-cea4-4107-9164-0b9ff91fa5f8)

1.2.1 Then choose the module zip and click on the 'Install Now' button.
![image](https://github.com/Itechvision/wordpress-plugin/assets/46921821/719756aa-b975-4699-ab74-ab21c702447b)

2. Activate the plugin through the 'Plugins' screen in WordPress.
 Goto: Admin => Plugins => Installed Plugins => MPGS => Click on "Activate Plugin"
![image](https://github.com/Itechvision/wordpress-plugin/assets/46921821/ebbac369-00c5-4322-b28b-f5541812a9c8)

3. Go to the WooCommerce backend settings page.
4. Navigate to the Payments tab, enable the MPGS module and save changes then you are ready.
---
## Configuring the Module
Once you have installed the MasterCard Payment Gateway Services module, you can then configure it. 
### Steps to configure the module
1. Log into your WordPress Admin Panel.  
2. In the WordPress Admin Panel, select WooCommerce > Settings > Payments.
![image](https://github.com/Itechvision/wordpress-plugin/assets/46921821/5ff5d838-9433-40a7-bfa4-6edc52b8e56d)

3. Locate "MasterCard Payment Gateway Services" and then click the "Manage" button.
![image](https://github.com/Itechvision/wordpress-plugin/assets/46921821/4b3b13d2-8945-4dd0-bbc1-2f51474d1da5)

3. The gateway configuration fields will be displayed. Configure according to your requirements and then click on the "Save Changes" button.
    - **Enable/Disable** - Tick the checkbox to make this Payment option available in the front end. Un-tick it to Disable it, so it will not display in the front end.
    - **Title** - Short payment method name displayed to the payer on the checkout page. Example, "Credit Card / Debit Card".
    - **Description** - Description of this Payment Method displayed when a payer selects this payment method. For example, "Pay with your card via Mastercard".
    - **Gateway** - The payment gateway region, use Custom Gateway Host if one has been provided to you. Four options are available: Europe, and Asia Pacific. North America, and Custom URL.
    - **Custom Gateway Host** - This option is available when the "Gateway" option is set to "Custom Gateway Host". Your Account Manager will tell you if this is needed or not.
    - **Transaction Mode** - In "Purchase" mode, the customer is charged immediately. In Authorize mode, the transaction is only authorized, and the capturing of funds is a manual process performed by you using the Woocommerce admin panel. The Manual capture process is explained in the next section.
    - **Integration Model** - In "Hosted Checkout", the payer will type their details into the gateway"s payment page. In "Hosted Session", the payer will remain on the woo commerce payment page.
    - **Checkout Interaction** - This option is available when the "Payment Model" option is set to "Hosted Checkout" or "Legacy Hosted Checkout" and allows to set redirection behaviour to the payment gateway. Either "Embedded" or "Redirect to Payment Page" for the contemporary version Hosted Checkout or Either "Lightbox" or "Redirect to Payment Page" for Legacy Hosted Checkout.
    - **3D-Secure** - This option is available when the "Payment Model" option is set to "Hosted Session". Tick the checkbox of "Use 3D-Secure" to Enable it. Be sure to Enable 3D-Secure in your Mastercard account. Un-tick it to Disable it. Hosted Checkout will present 3D-secure authentication when configured by your payment service provider.
    - **Saved Cards** - This option is available when the "Payment Model" option is set to "Hosted Session". Tick the checkbox of "Enable Payment via Saved Cards" to Enable it. If enabled, the payer will be able to pay with a previously saved card during checkout. Card details are saved on the payment gateway, not on your store. Un-tick it to Disable it.
    - **Debug Logging** - When ticked, the file ./wp-content/mastercard.log will include additional logging including all communication with the gateway. Debug logging is only available in test sandbox mode.
    - **Test Sandbox** - Tick the checkbox of "Enable Sandbox Mode" to Enable it. If enabled, it places the payment gateway in test mode using test API credentials (real payments will not be taken). Un-tick it to Disable it. If disabled, it will take the real payments.
    - **Merchant ID** - Insert your account Merchant ID. Gateway Merchant Administrator: Admin > Integration Settings.
    - **API Password** - Insert your API Password. Gateway Merchant Administrator: Admin > Integration Settings.
---
## Capture an Order
### Steps to process a capture transaction on an order
1. Edit the order in the admin. Path: Admin >  WooCommerce > Orders > Edit Order 
2. On the right side of the order, you can open a dropdown menu and select "Capture Payment". Ensure the order is authorized, (see Order Notes, right side of the order page), otherwise an already captured order will not have the "capture" option.
![image](https://github.com/Itechvision/wordpress-plugin/assets/46921821/0515cce0-f012-46e6-acd2-4f278f4a0b80)

3. After selecting "Capture Payment" as an option, click the "Update" button to capture funds for this order.

