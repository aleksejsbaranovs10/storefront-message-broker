# Overview
This repository is responsible for Message Broker Application.
Message Broker application is a mediator between Catalog StoreFront Application and Magento Backoffice.
The main responsibility is to listen changes to catalog entities: category and product, request the data
from Magento backoffice and bypass it to CatalogStoreFront application.

### Message Broker Application Responsibilities
- create listeners for export messages
- Pull data from Magento backoffice 
- Push data with gRPC to catalog store front

### Service repository Dependencies 
- https://github.com/magento/commerce-data-export (Provides API to Export entities from Magento to any subscribed consumer)
- https://github.com/magento/catalog-storefront (StoreFront application, which is responsible for holding all information)

### 3rd-party dependencies (composer packages)
- magento/framework
- magento/amqp
- magento/message-queue

### Contributing
Contributions are welcomed! Read the [Contributing Guide](./CONTRIBUTING.md) for more information.

### Licensing
This project is licensed under the OSL-3.0 License. See [LICENSE](./LICENSE.md) for more information.

### Project Installation
In case if you want to install this application as a monolith, please be aware that `app/etc/di.xml` should not be copied.

In order to install project run ```composer install``` command.
Than run ```bin/magento microservice:install ``` with all required arguments.

### Stubs
In order to make magento framework work with Magento modules, there were created few stubs
and add few preferences:

`\Magento\CatalogMessageBrokerMessageQueue\Stub\CustomAttributesDefaultTypeLocator`
On bootstrap Magento tries to load all dependencies, that are required for WebAPI. One of such depdendency is CustomAttributesDefaultTypeLocator.
`\Magento\CatalogMessageBrokerMessageQueue\Stub\Json\Encoder`
Magento framework tries not only to encode, but also to translate JSON. We dont need this functionality.
`\Magento\CatalogMessageBrokerMessageQueue\Stub\App\Request\DefaultPathInfoProcessor`
On Bootstrap Magento need to resolve default path. As we dont need default path, we created stub.
`\Magento\CatalogMessageBroker\Stub\Amqp\ResourceModel\MessageQueueLock`
Message queue lock mechanism is utilizing Magento database, in order to get rid of database, we need to get rid of MessageQueueLock
