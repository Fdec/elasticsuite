![ElasticSuite](doc/static/elasticsuite-banner.jpg)

## What is ElasticSuite for Magento 2 ?

ElasticSuite is a merchandising suite for Magento which aims to provide out the box a lot of features usually only available with proprietary merchandising tools.

The project was originally created by Smile and released to the Open Source community for Magento 1.x. You can still find the Magento 1.x module [here](https://github.com/Smile-SA/smile-magento-elasticsearch).

## Who is developping ElasticSuite ?

<p align="center">
    <a href="http://www.smile-oss.com"><img alt="SmileLab" src="doc/static/smilelab-logo.png" /></a>
</p>

SmileLab is the innovation and experimentation department of Smile.

Our multidisciplinary team brings together experts in technology, innovation, and new applications.

Together we explore, invent, and test technologies of the future, to better serve our clients.

## Where can I see it in action ? 

A demonstration store including the latest version of ElasticSuite is available here : [ElasticSuite Demo](http://demo.magento-elastic-suite.io/)

## Main Features

### Current version

The current version 2.0.0 has been focused on the Magento 2 migration of our ElasticSearch search engine.

We are still working on the migration of all features available into the Magento 1.x .version of the module in this new version.

Actually, there are the features actually included :

<br/>

* **Enhanced price slider :**

    The module features an **out of the box price slider**.

    ![Price Slider](doc/static/price_slider.png)

<br/>

* **Multiple select in layered navigation :**

    The module allows customers to **apply multiple values of the same filter** criteria.

    ![Multi Select Facet](doc/static/multiselect_facet.png)

<br/>

* **Multiple select for swatches :**

    Same as above, the module allow the users to **choose several swatches** for filtering.

    ![Multi Select Swatches](doc/static/multiselect_swatches.png)

<br/>

* **Approaching search and spellchecking :**

    The module **automatically detects typing mistakes** and handles correct results for them. Don't worry about "fat-finger syndrome" anymore !

    ![Approaching Search](doc/static/approaching_search.png)

<br/>

* **Automatic stopwords detection :**

    The module is able to **automatically detect "stopwords"** based on their frequency into the search index.
    This means the engine is able to deal with queries containing stopwords, but also with **pure stopwords queries** such as "to be or not to be" or even "he and she"!

<br/>

* **Fully Configurable relevance configuration :**

    You are able to customize - on your own, via a dedicated screen in Magento's back-office - each technical parameters that are used to communicate with ElasticSearch.
    Doig so, you can **fine-tune the engine's configuration** to fit your needs according to your store's data typology.

<br/>

* **Customizable filters :**

    Each attribute can now be configured in Magento's back-office to **change its behavior when used for filtering**

   -  Conditional display of the filter based on its coverage rate.
   -  Maximum number of elements displayed by the filter.
   -  Sort order of elements of the filter.

    ![Facet Configuration](doc/static/facet_configuration.png)

<br/>

* **Enhanced synonyms management :**

    Synonyms are now managed directly by the engine instead of the legacy Magento's behavior.

    This means that adding a synonym between *"men"* and *"man"* will make it working in all queries containing *"men"* like *"man shirt"* or *"man pants"* instead of having to define a synonym for each query.

<br/>

### And more to come !

The next versions that will be coming all among this year will include the following features :

* **Better autocomplete  :**

    ElasticSuite will feature **enhanced content in the autocomplete box** : popular search terms, products, categories, products attributes (eg : product brand, authors for a book, actors for DVDs, etc...).

    The autocomplete will be **fully extensible to add custom content**, such as shop pages (if your store uses a store locator), CMS pages, etc...

<br/>

* **Virtual categories :**

    ElasticSuite will allow you to **define categories based on rules** (in addition to the standard manual selection). The rule definition is based on the Magento rules components, so you will not be disoriented.
    You will be able to define categories such as "All products in stock that are currently discounted".

    The engine will automatically refresh products matching the selection in Front-Office and will prevent you from having to re-assign products manually.

<br/>

* **Search optimizations :**

    ElasticSuite will also feature several ways to **optimize the search engine relevance**. This part will again be based on rules that can be defined in the Magento's back-office.
    This will allow you to create rules like "Boost all products that are in stock" or "Boost all new products". A preview for all optimizer rules will be available in the back-office so that you will be able to **preview each fine-tuning before publishing it**.
    This part of the module will be fully customizable and extensible for all your needs.

    Second part of the relevance optimization features will be the behavioral optimizers. This will allow you to build **rules matching your customer's behavior**.
    Thanks to this feature, optimization rules like "Apply a boost for most viewed products" or "Boost the top sales products" are now possible to create.

<br/>

* **Recommendations engine :**

    On top of the behavioral analysis part will come our recommendations engine. It will allow you to propose **custom recommendations to your customers, based on their previous visits on your websites**, and on other customer behaviors.

    Planned recommendations features are :
     + "Customers also bought"
     + Similar products
     + Cross Selling
     + Per-user recommendations, based on current customer profile and its previous visits and orders.
     + Per-search recommendations, to push products that were bought by previous users that have searched for the same terms.
     + And more to come !


## Documentation

Documentation is available [here](https://github.com/Smile-SA/elasticsuite/wiki).
