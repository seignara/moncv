<?php

namespace ContainerUusd9ky;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Container;
use Symfony\Component\DependencyInjection\Exception\InvalidArgumentException;
use Symfony\Component\DependencyInjection\Exception\LogicException;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;
use Symfony\Component\DependencyInjection\ParameterBag\FrozenParameterBag;

/**
 * This class has been auto-generated
 * by the Symfony Dependency Injection Component.
 *
 * @final since Symfony 3.3
 */
class appDevDebugProjectContainer extends Container
{
    private $buildParameters;
    private $parameters;
    private $targetDirs = array();

    public function __construct(array $buildParameters = array())
    {
        $dir = $this->targetDirs[0] = \dirname(__DIR__);
        for ($i = 1; $i <= 4; ++$i) {
            $this->targetDirs[$i] = $dir = \dirname($dir);
        }
        $this->buildParameters = $buildParameters;
        $this->parameters = $this->getDefaultParameters();

        $this->services = array();
        $this->normalizedIds = array(
            'apiplatform\\core\\api\\iriconverterinterface' => 'ApiPlatform\\Core\\Api\\IriConverterInterface',
            'apiplatform\\core\\api\\urlgeneratorinterface' => 'ApiPlatform\\Core\\Api\\UrlGeneratorInterface',
            'apiplatform\\core\\bridge\\doctrine\\orm\\extension\\eagerloadingextension' => 'ApiPlatform\\Core\\Bridge\\Doctrine\\Orm\\Extension\\EagerLoadingExtension',
            'apiplatform\\core\\bridge\\doctrine\\orm\\extension\\filtereagerloadingextension' => 'ApiPlatform\\Core\\Bridge\\Doctrine\\Orm\\Extension\\FilterEagerLoadingExtension',
            'apiplatform\\core\\bridge\\doctrine\\orm\\extension\\filterextension' => 'ApiPlatform\\Core\\Bridge\\Doctrine\\Orm\\Extension\\FilterExtension',
            'apiplatform\\core\\bridge\\doctrine\\orm\\extension\\orderextension' => 'ApiPlatform\\Core\\Bridge\\Doctrine\\Orm\\Extension\\OrderExtension',
            'apiplatform\\core\\bridge\\doctrine\\orm\\extension\\paginationextension' => 'ApiPlatform\\Core\\Bridge\\Doctrine\\Orm\\Extension\\PaginationExtension',
            'apiplatform\\core\\dataprovider\\collectiondataproviderinterface' => 'ApiPlatform\\Core\\DataProvider\\CollectionDataProviderInterface',
            'apiplatform\\core\\dataprovider\\itemdataproviderinterface' => 'ApiPlatform\\Core\\DataProvider\\ItemDataProviderInterface',
            'apiplatform\\core\\dataprovider\\subresourcedataproviderinterface' => 'ApiPlatform\\Core\\DataProvider\\SubresourceDataProviderInterface',
            'apiplatform\\core\\metadata\\property\\factory\\propertymetadatafactoryinterface' => 'ApiPlatform\\Core\\Metadata\\Property\\Factory\\PropertyMetadataFactoryInterface',
            'apiplatform\\core\\metadata\\property\\factory\\propertynamecollectionfactoryinterface' => 'ApiPlatform\\Core\\Metadata\\Property\\Factory\\PropertyNameCollectionFactoryInterface',
            'apiplatform\\core\\metadata\\resource\\factory\\resourcemetadatafactoryinterface' => 'ApiPlatform\\Core\\Metadata\\Resource\\Factory\\ResourceMetadataFactoryInterface',
            'apiplatform\\core\\metadata\\resource\\factory\\resourcenamecollectionfactoryinterface' => 'ApiPlatform\\Core\\Metadata\\Resource\\Factory\\ResourceNameCollectionFactoryInterface',
            'apiplatform\\core\\serializer\\serializercontextbuilderinterface' => 'ApiPlatform\\Core\\Serializer\\SerializerContextBuilderInterface',
            'appbundle\\controller\\defaultcontroller' => 'AppBundle\\Controller\\DefaultController',
            'appbundle\\controller\\loisircontroller' => 'AppBundle\\Controller\\LoisirController',
            'appbundle\\form\\loisirstype' => 'AppBundle\\Form\\LoisirsType',
            'symfony\\bundle\\frameworkbundle\\controller\\redirectcontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController',
            'symfony\\bundle\\frameworkbundle\\controller\\templatecontroller' => 'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController',
        );
        $this->syntheticIds = array(
            'kernel' => true,
        );
        $this->methodMap = array(
            'ApiPlatform\\Core\\Api\\IriConverterInterface' => 'getIriConverterInterfaceService',
            'ApiPlatform\\Core\\Api\\UrlGeneratorInterface' => 'getUrlGeneratorInterfaceService',
            'ApiPlatform\\Core\\Bridge\\Doctrine\\Orm\\Extension\\EagerLoadingExtension' => 'getEagerLoadingExtensionService',
            'ApiPlatform\\Core\\Bridge\\Doctrine\\Orm\\Extension\\FilterEagerLoadingExtension' => 'getFilterEagerLoadingExtensionService',
            'ApiPlatform\\Core\\Bridge\\Doctrine\\Orm\\Extension\\FilterExtension' => 'getFilterExtensionService',
            'ApiPlatform\\Core\\Bridge\\Doctrine\\Orm\\Extension\\OrderExtension' => 'getOrderExtensionService',
            'ApiPlatform\\Core\\Bridge\\Doctrine\\Orm\\Extension\\PaginationExtension' => 'getPaginationExtensionService',
            'ApiPlatform\\Core\\Metadata\\Property\\Factory\\PropertyMetadataFactoryInterface' => 'getPropertyMetadataFactoryInterfaceService',
            'ApiPlatform\\Core\\Metadata\\Resource\\Factory\\ResourceMetadataFactoryInterface' => 'getResourceMetadataFactoryInterfaceService',
            'ApiPlatform\\Core\\Metadata\\Resource\\Factory\\ResourceNameCollectionFactoryInterface' => 'getResourceNameCollectionFactoryInterfaceService',
            'ApiPlatform\\Core\\Serializer\\SerializerContextBuilderInterface' => 'getSerializerContextBuilderInterfaceService',
            'annotation_reader' => 'getAnnotationReaderService',
            'annotations.reader' => 'getAnnotations_ReaderService',
            'api_platform.cache.identifiers_extractor' => 'getApiPlatform_Cache_IdentifiersExtractorService',
            'api_platform.cache.metadata.property' => 'getApiPlatform_Cache_Metadata_PropertyService',
            'api_platform.cache.metadata.resource' => 'getApiPlatform_Cache_Metadata_ResourceService',
            'api_platform.cache.route_name_resolver' => 'getApiPlatform_Cache_RouteNameResolverService',
            'api_platform.cache.subresource_operation_factory' => 'getApiPlatform_Cache_SubresourceOperationFactoryService',
            'api_platform.collection_data_provider' => 'getApiPlatform_CollectionDataProviderService',
            'api_platform.filter_locator' => 'getApiPlatform_FilterLocatorService',
            'api_platform.http_cache.listener.response.configure' => 'getApiPlatform_HttpCache_Listener_Response_ConfigureService',
            'api_platform.hydra.listener.response.add_link_header' => 'getApiPlatform_Hydra_Listener_Response_AddLinkHeaderService',
            'api_platform.item_data_provider' => 'getApiPlatform_ItemDataProviderService',
            'api_platform.jsonld.context_builder' => 'getApiPlatform_Jsonld_ContextBuilderService',
            'api_platform.listener.request.add_format' => 'getApiPlatform_Listener_Request_AddFormatService',
            'api_platform.listener.request.deserialize' => 'getApiPlatform_Listener_Request_DeserializeService',
            'api_platform.listener.request.read' => 'getApiPlatform_Listener_Request_ReadService',
            'api_platform.metadata.extractor.xml' => 'getApiPlatform_Metadata_Extractor_XmlService',
            'api_platform.metadata.extractor.yaml' => 'getApiPlatform_Metadata_Extractor_YamlService',
            'api_platform.metadata.property.name_collection_factory' => 'getApiPlatform_Metadata_Property_NameCollectionFactoryService',
            'api_platform.operation_method_resolver' => 'getApiPlatform_OperationMethodResolverService',
            'api_platform.operation_path_resolver.custom' => 'getApiPlatform_OperationPathResolver_CustomService',
            'api_platform.path_segment_name_generator' => 'getApiPlatform_PathSegmentNameGeneratorService',
            'api_platform.resource_class_resolver' => 'getApiPlatform_ResourceClassResolverService',
            'api_platform.security.listener.request.deny_access' => 'getApiPlatform_Security_Listener_Request_DenyAccessService',
            'api_platform.subresource_data_provider' => 'getApiPlatform_SubresourceDataProviderService',
            'api_platform.subresource_operation_factory.cached' => 'getApiPlatform_SubresourceOperationFactory_CachedService',
            'api_platform.swagger.listener.ui' => 'getApiPlatform_Swagger_Listener_UiService',
            'api_platform.swagger.normalizer.documentation' => 'getApiPlatform_Swagger_Normalizer_DocumentationService',
            'argument_metadata_factory' => 'getArgumentMetadataFactoryService',
            'assets.context' => 'getAssets_ContextService',
            'assets.packages' => 'getAssets_PackagesService',
            'cache.annotations' => 'getCache_AnnotationsService',
            'cache.app' => 'getCache_AppService',
            'cache.serializer' => 'getCache_SerializerService',
            'cache.system' => 'getCache_SystemService',
            'cache.validator' => 'getCache_ValidatorService',
            'config_cache_factory' => 'getConfigCacheFactoryService',
            'controller_name_converter' => 'getControllerNameConverterService',
            'data_collector.dump' => 'getDataCollector_DumpService',
            'data_collector.form' => 'getDataCollector_FormService',
            'data_collector.form.extractor' => 'getDataCollector_Form_ExtractorService',
            'data_collector.request' => 'getDataCollector_RequestService',
            'data_collector.router' => 'getDataCollector_RouterService',
            'debug.argument_resolver' => 'getDebug_ArgumentResolverService',
            'debug.controller_resolver' => 'getDebug_ControllerResolverService',
            'debug.debug_handlers_listener' => 'getDebug_DebugHandlersListenerService',
            'debug.event_dispatcher' => 'getDebug_EventDispatcherService',
            'debug.file_link_formatter' => 'getDebug_FileLinkFormatterService',
            'debug.log_processor' => 'getDebug_LogProcessorService',
            'debug.security.access.decision_manager' => 'getDebug_Security_Access_DecisionManagerService',
            'debug.stopwatch' => 'getDebug_StopwatchService',
            'doctrine' => 'getDoctrineService',
            'doctrine.dbal.logger.profiling.default' => 'getDoctrine_Dbal_Logger_Profiling_DefaultService',
            'doctrine.orm.validator_initializer' => 'getDoctrine_Orm_ValidatorInitializerService',
            'fragment.listener' => 'getFragment_ListenerService',
            'framework_extra_bundle.argument_name_convertor' => 'getFrameworkExtraBundle_ArgumentNameConvertorService',
            'framework_extra_bundle.event.is_granted' => 'getFrameworkExtraBundle_Event_IsGrantedService',
            'http_kernel' => 'getHttpKernelService',
            'locale_listener' => 'getLocaleListenerService',
            'logger' => 'getLoggerService',
            'monolog.handler.console' => 'getMonolog_Handler_ConsoleService',
            'monolog.handler.main' => 'getMonolog_Handler_MainService',
            'monolog.handler.server_log' => 'getMonolog_Handler_ServerLogService',
            'monolog.logger.cache' => 'getMonolog_Logger_CacheService',
            'monolog.logger.event' => 'getMonolog_Logger_EventService',
            'monolog.logger.php' => 'getMonolog_Logger_PhpService',
            'monolog.logger.profiler' => 'getMonolog_Logger_ProfilerService',
            'monolog.logger.request' => 'getMonolog_Logger_RequestService',
            'profiler' => 'getProfilerService',
            'profiler_listener' => 'getProfilerListenerService',
            'property_accessor' => 'getPropertyAccessorService',
            'property_info' => 'getPropertyInfoService',
            'request_stack' => 'getRequestStackService',
            'resolve_controller_name_subscriber' => 'getResolveControllerNameSubscriberService',
            'response_listener' => 'getResponseListenerService',
            'router' => 'getRouterService',
            'router.request_context' => 'getRouter_RequestContextService',
            'router_listener' => 'getRouterListenerService',
            'security.authentication.manager' => 'getSecurity_Authentication_ManagerService',
            'security.authentication.trust_resolver' => 'getSecurity_Authentication_TrustResolverService',
            'security.authorization_checker' => 'getSecurity_AuthorizationCheckerService',
            'security.firewall' => 'getSecurity_FirewallService',
            'security.firewall.map' => 'getSecurity_Firewall_MapService',
            'security.logout_url_generator' => 'getSecurity_LogoutUrlGeneratorService',
            'security.rememberme.response_listener' => 'getSecurity_Rememberme_ResponseListenerService',
            'security.role_hierarchy' => 'getSecurity_RoleHierarchyService',
            'security.token_storage' => 'getSecurity_TokenStorageService',
            'sensio_framework_extra.cache.listener' => 'getSensioFrameworkExtra_Cache_ListenerService',
            'sensio_framework_extra.controller.listener' => 'getSensioFrameworkExtra_Controller_ListenerService',
            'sensio_framework_extra.converter.listener' => 'getSensioFrameworkExtra_Converter_ListenerService',
            'sensio_framework_extra.converter.manager' => 'getSensioFrameworkExtra_Converter_ManagerService',
            'sensio_framework_extra.security.listener' => 'getSensioFrameworkExtra_Security_ListenerService',
            'sensio_framework_extra.view.listener' => 'getSensioFrameworkExtra_View_ListenerService',
            'serializer' => 'getSerializerService',
            'serializer.mapping.class_metadata_factory' => 'getSerializer_Mapping_ClassMetadataFactoryService',
            'session.save_listener' => 'getSession_SaveListenerService',
            'session_listener' => 'getSessionListenerService',
            'streamed_response_listener' => 'getStreamedResponseListenerService',
            'translator' => 'getTranslatorService',
            'twig' => 'getTwigService',
            'twig.loader' => 'getTwig_LoaderService',
            'twig.profile' => 'getTwig_ProfileService',
            'uri_signer' => 'getUriSignerService',
            'validate_request_listener' => 'getValidateRequestListenerService',
            'validator' => 'getValidatorService',
            'validator.builder' => 'getValidator_BuilderService',
            'var_dumper.cloner' => 'getVarDumper_ClonerService',
            'web_profiler.csp.handler' => 'getWebProfiler_Csp_HandlerService',
            'web_profiler.debug_toolbar' => 'getWebProfiler_DebugToolbarService',
        );
        $this->fileMap = array(
            'AppBundle\\Controller\\DefaultController' => __DIR__.'/getDefaultControllerService.php',
            'AppBundle\\Controller\\LoisirController' => __DIR__.'/getLoisirControllerService.php',
            'AppBundle\\Form\\LoisirsType' => __DIR__.'/getLoisirsTypeService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\RedirectController' => __DIR__.'/getRedirectControllerService.php',
            'Symfony\\Bundle\\FrameworkBundle\\Controller\\TemplateController' => __DIR__.'/getTemplateControllerService.php',
            'annotations.cache_warmer' => __DIR__.'/getAnnotations_CacheWarmerService.php',
            'api_platform.action.documentation' => __DIR__.'/getApiPlatform_Action_DocumentationService.php',
            'api_platform.action.entrypoint' => __DIR__.'/getApiPlatform_Action_EntrypointService.php',
            'api_platform.action.exception' => __DIR__.'/getApiPlatform_Action_ExceptionService.php',
            'api_platform.action.placeholder' => __DIR__.'/getApiPlatform_Action_PlaceholderService.php',
            'api_platform.doctrine.listener.view.write' => __DIR__.'/getApiPlatform_Doctrine_Listener_View_WriteService.php',
            'api_platform.jsonld.action.context' => __DIR__.'/getApiPlatform_Jsonld_Action_ContextService.php',
            'api_platform.listener.exception' => __DIR__.'/getApiPlatform_Listener_ExceptionService.php',
            'api_platform.listener.exception.validation' => __DIR__.'/getApiPlatform_Listener_Exception_ValidationService.php',
            'api_platform.listener.view.respond' => __DIR__.'/getApiPlatform_Listener_View_RespondService.php',
            'api_platform.listener.view.serialize' => __DIR__.'/getApiPlatform_Listener_View_SerializeService.php',
            'api_platform.listener.view.validate' => __DIR__.'/getApiPlatform_Listener_View_ValidateService.php',
            'api_platform.operation_path_resolver.default' => __DIR__.'/getApiPlatform_OperationPathResolver_DefaultService.php',
            'api_platform.swagger.action.ui' => __DIR__.'/getApiPlatform_Swagger_Action_UiService.php',
            'api_platform.swagger.command.swagger_command' => __DIR__.'/getApiPlatform_Swagger_Command_SwaggerCommandService.php',
            'argument_resolver.default' => __DIR__.'/getArgumentResolver_DefaultService.php',
            'argument_resolver.request' => __DIR__.'/getArgumentResolver_RequestService.php',
            'argument_resolver.request_attribute' => __DIR__.'/getArgumentResolver_RequestAttributeService.php',
            'argument_resolver.service' => __DIR__.'/getArgumentResolver_ServiceService.php',
            'argument_resolver.session' => __DIR__.'/getArgumentResolver_SessionService.php',
            'argument_resolver.variadic' => __DIR__.'/getArgumentResolver_VariadicService.php',
            'cache.default_clearer' => __DIR__.'/getCache_DefaultClearerService.php',
            'cache.global_clearer' => __DIR__.'/getCache_GlobalClearerService.php',
            'cache.system_clearer' => __DIR__.'/getCache_SystemClearerService.php',
            'cache_clearer' => __DIR__.'/getCacheClearerService.php',
            'cache_warmer' => __DIR__.'/getCacheWarmerService.php',
            'config.resource.self_checking_resource_checker' => __DIR__.'/getConfig_Resource_SelfCheckingResourceCheckerService.php',
            'console.command.about' => __DIR__.'/getConsole_Command_AboutService.php',
            'console.command.assets_install' => __DIR__.'/getConsole_Command_AssetsInstallService.php',
            'console.command.cache_clear' => __DIR__.'/getConsole_Command_CacheClearService.php',
            'console.command.cache_pool_clear' => __DIR__.'/getConsole_Command_CachePoolClearService.php',
            'console.command.cache_pool_prune' => __DIR__.'/getConsole_Command_CachePoolPruneService.php',
            'console.command.cache_warmup' => __DIR__.'/getConsole_Command_CacheWarmupService.php',
            'console.command.config_debug' => __DIR__.'/getConsole_Command_ConfigDebugService.php',
            'console.command.config_dump_reference' => __DIR__.'/getConsole_Command_ConfigDumpReferenceService.php',
            'console.command.container_debug' => __DIR__.'/getConsole_Command_ContainerDebugService.php',
            'console.command.debug_autowiring' => __DIR__.'/getConsole_Command_DebugAutowiringService.php',
            'console.command.event_dispatcher_debug' => __DIR__.'/getConsole_Command_EventDispatcherDebugService.php',
            'console.command.form_debug' => __DIR__.'/getConsole_Command_FormDebugService.php',
            'console.command.router_debug' => __DIR__.'/getConsole_Command_RouterDebugService.php',
            'console.command.router_match' => __DIR__.'/getConsole_Command_RouterMatchService.php',
            'console.command.xliff_lint' => __DIR__.'/getConsole_Command_XliffLintService.php',
            'console.command.yaml_lint' => __DIR__.'/getConsole_Command_YamlLintService.php',
            'console.command_loader' => __DIR__.'/getConsole_CommandLoaderService.php',
            'console.error_listener' => __DIR__.'/getConsole_ErrorListenerService.php',
            'debug.dump_listener' => __DIR__.'/getDebug_DumpListenerService.php',
            'dependency_injection.config.container_parameters_resource_checker' => __DIR__.'/getDependencyInjection_Config_ContainerParametersResourceCheckerService.php',
            'deprecated.form.registry' => __DIR__.'/getDeprecated_Form_RegistryService.php',
            'deprecated.form.registry.csrf' => __DIR__.'/getDeprecated_Form_Registry_CsrfService.php',
            'doctrine.cache_clear_metadata_command' => __DIR__.'/getDoctrine_CacheClearMetadataCommandService.php',
            'doctrine.cache_clear_query_cache_command' => __DIR__.'/getDoctrine_CacheClearQueryCacheCommandService.php',
            'doctrine.cache_clear_result_command' => __DIR__.'/getDoctrine_CacheClearResultCommandService.php',
            'doctrine.cache_collection_region_command' => __DIR__.'/getDoctrine_CacheCollectionRegionCommandService.php',
            'doctrine.clear_entity_region_command' => __DIR__.'/getDoctrine_ClearEntityRegionCommandService.php',
            'doctrine.clear_query_region_command' => __DIR__.'/getDoctrine_ClearQueryRegionCommandService.php',
            'doctrine.database_create_command' => __DIR__.'/getDoctrine_DatabaseCreateCommandService.php',
            'doctrine.database_drop_command' => __DIR__.'/getDoctrine_DatabaseDropCommandService.php',
            'doctrine.database_import_command' => __DIR__.'/getDoctrine_DatabaseImportCommandService.php',
            'doctrine.dbal.connection_factory' => __DIR__.'/getDoctrine_Dbal_ConnectionFactoryService.php',
            'doctrine.dbal.default_connection' => __DIR__.'/getDoctrine_Dbal_DefaultConnectionService.php',
            'doctrine.ensure_production_settings_command' => __DIR__.'/getDoctrine_EnsureProductionSettingsCommandService.php',
            'doctrine.generate_entities_command' => __DIR__.'/getDoctrine_GenerateEntitiesCommandService.php',
            'doctrine.mapping_convert_command' => __DIR__.'/getDoctrine_MappingConvertCommandService.php',
            'doctrine.mapping_import_command' => __DIR__.'/getDoctrine_MappingImportCommandService.php',
            'doctrine.mapping_info_command' => __DIR__.'/getDoctrine_MappingInfoCommandService.php',
            'doctrine.orm.default_entity_listener_resolver' => __DIR__.'/getDoctrine_Orm_DefaultEntityListenerResolverService.php',
            'doctrine.orm.default_entity_manager' => __DIR__.'/getDoctrine_Orm_DefaultEntityManagerService.php',
            'doctrine.orm.default_entity_manager.property_info_extractor' => __DIR__.'/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php',
            'doctrine.orm.default_listeners.attach_entity_listeners' => __DIR__.'/getDoctrine_Orm_DefaultListeners_AttachEntityListenersService.php',
            'doctrine.orm.default_manager_configurator' => __DIR__.'/getDoctrine_Orm_DefaultManagerConfiguratorService.php',
            'doctrine.orm.proxy_cache_warmer' => __DIR__.'/getDoctrine_Orm_ProxyCacheWarmerService.php',
            'doctrine.orm.validator.unique' => __DIR__.'/getDoctrine_Orm_Validator_UniqueService.php',
            'doctrine.query_dql_command' => __DIR__.'/getDoctrine_QueryDqlCommandService.php',
            'doctrine.query_sql_command' => __DIR__.'/getDoctrine_QuerySqlCommandService.php',
            'doctrine.schema_create_command' => __DIR__.'/getDoctrine_SchemaCreateCommandService.php',
            'doctrine.schema_drop_command' => __DIR__.'/getDoctrine_SchemaDropCommandService.php',
            'doctrine.schema_update_command' => __DIR__.'/getDoctrine_SchemaUpdateCommandService.php',
            'doctrine.schema_validate_command' => __DIR__.'/getDoctrine_SchemaValidateCommandService.php',
            'doctrine_cache.contains_command' => __DIR__.'/getDoctrineCache_ContainsCommandService.php',
            'doctrine_cache.delete_command' => __DIR__.'/getDoctrineCache_DeleteCommandService.php',
            'doctrine_cache.flush_command' => __DIR__.'/getDoctrineCache_FlushCommandService.php',
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => __DIR__.'/getDoctrineCache_Providers_Doctrine_Orm_DefaultMetadataCacheService.php',
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => __DIR__.'/getDoctrineCache_Providers_Doctrine_Orm_DefaultQueryCacheService.php',
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => __DIR__.'/getDoctrineCache_Providers_Doctrine_Orm_DefaultResultCacheService.php',
            'doctrine_cache.stats_command' => __DIR__.'/getDoctrineCache_StatsCommandService.php',
            'file_locator' => __DIR__.'/getFileLocatorService.php',
            'filesystem' => __DIR__.'/getFilesystemService.php',
            'form.factory' => __DIR__.'/getForm_FactoryService.php',
            'form.registry' => __DIR__.'/getForm_RegistryService.php',
            'form.resolved_type_factory' => __DIR__.'/getForm_ResolvedTypeFactoryService.php',
            'form.server_params' => __DIR__.'/getForm_ServerParamsService.php',
            'form.type.birthday' => __DIR__.'/getForm_Type_BirthdayService.php',
            'form.type.button' => __DIR__.'/getForm_Type_ButtonService.php',
            'form.type.checkbox' => __DIR__.'/getForm_Type_CheckboxService.php',
            'form.type.choice' => __DIR__.'/getForm_Type_ChoiceService.php',
            'form.type.collection' => __DIR__.'/getForm_Type_CollectionService.php',
            'form.type.country' => __DIR__.'/getForm_Type_CountryService.php',
            'form.type.currency' => __DIR__.'/getForm_Type_CurrencyService.php',
            'form.type.date' => __DIR__.'/getForm_Type_DateService.php',
            'form.type.datetime' => __DIR__.'/getForm_Type_DatetimeService.php',
            'form.type.email' => __DIR__.'/getForm_Type_EmailService.php',
            'form.type.entity' => __DIR__.'/getForm_Type_EntityService.php',
            'form.type.file' => __DIR__.'/getForm_Type_FileService.php',
            'form.type.form' => __DIR__.'/getForm_Type_FormService.php',
            'form.type.hidden' => __DIR__.'/getForm_Type_HiddenService.php',
            'form.type.integer' => __DIR__.'/getForm_Type_IntegerService.php',
            'form.type.language' => __DIR__.'/getForm_Type_LanguageService.php',
            'form.type.locale' => __DIR__.'/getForm_Type_LocaleService.php',
            'form.type.money' => __DIR__.'/getForm_Type_MoneyService.php',
            'form.type.number' => __DIR__.'/getForm_Type_NumberService.php',
            'form.type.password' => __DIR__.'/getForm_Type_PasswordService.php',
            'form.type.percent' => __DIR__.'/getForm_Type_PercentService.php',
            'form.type.radio' => __DIR__.'/getForm_Type_RadioService.php',
            'form.type.range' => __DIR__.'/getForm_Type_RangeService.php',
            'form.type.repeated' => __DIR__.'/getForm_Type_RepeatedService.php',
            'form.type.reset' => __DIR__.'/getForm_Type_ResetService.php',
            'form.type.search' => __DIR__.'/getForm_Type_SearchService.php',
            'form.type.submit' => __DIR__.'/getForm_Type_SubmitService.php',
            'form.type.text' => __DIR__.'/getForm_Type_TextService.php',
            'form.type.textarea' => __DIR__.'/getForm_Type_TextareaService.php',
            'form.type.time' => __DIR__.'/getForm_Type_TimeService.php',
            'form.type.timezone' => __DIR__.'/getForm_Type_TimezoneService.php',
            'form.type.url' => __DIR__.'/getForm_Type_UrlService.php',
            'form.type_extension.csrf' => __DIR__.'/getForm_TypeExtension_CsrfService.php',
            'form.type_extension.form.data_collector' => __DIR__.'/getForm_TypeExtension_Form_DataCollectorService.php',
            'form.type_extension.form.http_foundation' => __DIR__.'/getForm_TypeExtension_Form_HttpFoundationService.php',
            'form.type_extension.form.validator' => __DIR__.'/getForm_TypeExtension_Form_ValidatorService.php',
            'form.type_extension.repeated.validator' => __DIR__.'/getForm_TypeExtension_Repeated_ValidatorService.php',
            'form.type_extension.submit.validator' => __DIR__.'/getForm_TypeExtension_Submit_ValidatorService.php',
            'form.type_extension.upload.validator' => __DIR__.'/getForm_TypeExtension_Upload_ValidatorService.php',
            'form.type_guesser.doctrine' => __DIR__.'/getForm_TypeGuesser_DoctrineService.php',
            'form.type_guesser.validator' => __DIR__.'/getForm_TypeGuesser_ValidatorService.php',
            'fragment.handler' => __DIR__.'/getFragment_HandlerService.php',
            'fragment.renderer.hinclude' => __DIR__.'/getFragment_Renderer_HincludeService.php',
            'fragment.renderer.inline' => __DIR__.'/getFragment_Renderer_InlineService.php',
            'kernel.class_cache.cache_warmer' => __DIR__.'/getKernel_ClassCache_CacheWarmerService.php',
            'monolog.activation_strategy.not_found' => __DIR__.'/getMonolog_ActivationStrategy_NotFoundService.php',
            'monolog.handler.fingers_crossed.error_level_activation_strategy' => __DIR__.'/getMonolog_Handler_FingersCrossed_ErrorLevelActivationStrategyService.php',
            'monolog.handler.null_internal' => __DIR__.'/getMonolog_Handler_NullInternalService.php',
            'monolog.logger.console' => __DIR__.'/getMonolog_Logger_ConsoleService.php',
            'monolog.logger.doctrine' => __DIR__.'/getMonolog_Logger_DoctrineService.php',
            'monolog.logger.security' => __DIR__.'/getMonolog_Logger_SecurityService.php',
            'property_info.reflection_extractor' => __DIR__.'/getPropertyInfo_ReflectionExtractorService.php',
            'property_info.serializer_extractor' => __DIR__.'/getPropertyInfo_SerializerExtractorService.php',
            'router.cache_warmer' => __DIR__.'/getRouter_CacheWarmerService.php',
            'routing.loader' => __DIR__.'/getRouting_LoaderService.php',
            'security.access.authenticated_voter' => __DIR__.'/getSecurity_Access_AuthenticatedVoterService.php',
            'security.access.expression_voter' => __DIR__.'/getSecurity_Access_ExpressionVoterService.php',
            'security.access.simple_role_voter' => __DIR__.'/getSecurity_Access_SimpleRoleVoterService.php',
            'security.access_listener' => __DIR__.'/getSecurity_AccessListenerService.php',
            'security.access_map' => __DIR__.'/getSecurity_AccessMapService.php',
            'security.authentication.guard_handler' => __DIR__.'/getSecurity_Authentication_GuardHandlerService.php',
            'security.authentication.listener.anonymous.main' => __DIR__.'/getSecurity_Authentication_Listener_Anonymous_MainService.php',
            'security.authentication.provider.anonymous.main' => __DIR__.'/getSecurity_Authentication_Provider_Anonymous_MainService.php',
            'security.authentication_utils' => __DIR__.'/getSecurity_AuthenticationUtilsService.php',
            'security.channel_listener' => __DIR__.'/getSecurity_ChannelListenerService.php',
            'security.command.user_password_encoder' => __DIR__.'/getSecurity_Command_UserPasswordEncoderService.php',
            'security.context_listener.0' => __DIR__.'/getSecurity_ContextListener_0Service.php',
            'security.csrf.token_manager' => __DIR__.'/getSecurity_Csrf_TokenManagerService.php',
            'security.encoder_factory' => __DIR__.'/getSecurity_EncoderFactoryService.php',
            'security.firewall.map.context.dev' => __DIR__.'/getSecurity_Firewall_Map_Context_DevService.php',
            'security.firewall.map.context.main' => __DIR__.'/getSecurity_Firewall_Map_Context_MainService.php',
            'security.password_encoder' => __DIR__.'/getSecurity_PasswordEncoderService.php',
            'security.request_matcher.zfhj2lw' => __DIR__.'/getSecurity_RequestMatcher_Zfhj2lwService.php',
            'security.user.provider.concrete.in_memory' => __DIR__.'/getSecurity_User_Provider_Concrete_InMemoryService.php',
            'security.user_value_resolver' => __DIR__.'/getSecurity_UserValueResolverService.php',
            'security.validator.user_password' => __DIR__.'/getSecurity_Validator_UserPasswordService.php',
            'sensio_distribution.security_checker' => __DIR__.'/getSensioDistribution_SecurityCheckerService.php',
            'sensio_distribution.security_checker.command' => __DIR__.'/getSensioDistribution_SecurityChecker_CommandService.php',
            'serializer.mapping.cache.symfony' => __DIR__.'/getSerializer_Mapping_Cache_SymfonyService.php',
            'serializer.mapping.cache_warmer' => __DIR__.'/getSerializer_Mapping_CacheWarmerService.php',
            'services_resetter' => __DIR__.'/getServicesResetterService.php',
            'session' => __DIR__.'/getSessionService.php',
            'session.handler' => __DIR__.'/getSession_HandlerService.php',
            'session.storage.filesystem' => __DIR__.'/getSession_Storage_FilesystemService.php',
            'session.storage.metadata_bag' => __DIR__.'/getSession_Storage_MetadataBagService.php',
            'session.storage.native' => __DIR__.'/getSession_Storage_NativeService.php',
            'session.storage.php_bridge' => __DIR__.'/getSession_Storage_PhpBridgeService.php',
            'swiftmailer.email_sender.listener' => __DIR__.'/getSwiftmailer_EmailSender_ListenerService.php',
            'swiftmailer.mailer.default' => __DIR__.'/getSwiftmailer_Mailer_DefaultService.php',
            'swiftmailer.mailer.default.plugin.messagelogger' => __DIR__.'/getSwiftmailer_Mailer_Default_Plugin_MessageloggerService.php',
            'swiftmailer.mailer.default.spool' => __DIR__.'/getSwiftmailer_Mailer_Default_SpoolService.php',
            'swiftmailer.mailer.default.transport' => __DIR__.'/getSwiftmailer_Mailer_Default_TransportService.php',
            'swiftmailer.mailer.default.transport.eventdispatcher' => __DIR__.'/getSwiftmailer_Mailer_Default_Transport_EventdispatcherService.php',
            'swiftmailer.mailer.default.transport.real' => __DIR__.'/getSwiftmailer_Mailer_Default_Transport_RealService.php',
            'templating.helper.logout_url' => __DIR__.'/getTemplating_Helper_LogoutUrlService.php',
            'templating.helper.security' => __DIR__.'/getTemplating_Helper_SecurityService.php',
            'twig.cache_warmer' => __DIR__.'/getTwig_CacheWarmerService.php',
            'twig.command.debug' => __DIR__.'/getTwig_Command_DebugService.php',
            'twig.command.lint' => __DIR__.'/getTwig_Command_LintService.php',
            'twig.controller.exception' => __DIR__.'/getTwig_Controller_ExceptionService.php',
            'twig.controller.preview_error' => __DIR__.'/getTwig_Controller_PreviewErrorService.php',
            'twig.exception_listener' => __DIR__.'/getTwig_ExceptionListenerService.php',
            'twig.form.renderer' => __DIR__.'/getTwig_Form_RendererService.php',
            'twig.runtime.httpkernel' => __DIR__.'/getTwig_Runtime_HttpkernelService.php',
            'twig.template_cache_warmer' => __DIR__.'/getTwig_TemplateCacheWarmerService.php',
            'twig.translation.extractor' => __DIR__.'/getTwig_Translation_ExtractorService.php',
            'validator.email' => __DIR__.'/getValidator_EmailService.php',
            'validator.expression' => __DIR__.'/getValidator_ExpressionService.php',
            'validator.mapping.cache_warmer' => __DIR__.'/getValidator_Mapping_CacheWarmerService.php',
            'var_dumper.cli_dumper' => __DIR__.'/getVarDumper_CliDumperService.php',
            'web_profiler.controller.exception' => __DIR__.'/getWebProfiler_Controller_ExceptionService.php',
            'web_profiler.controller.profiler' => __DIR__.'/getWebProfiler_Controller_ProfilerService.php',
            'web_profiler.controller.router' => __DIR__.'/getWebProfiler_Controller_RouterService.php',
            'web_server.command.server_log' => __DIR__.'/getWebServer_Command_ServerLogService.php',
            'web_server.command.server_run' => __DIR__.'/getWebServer_Command_ServerRunService.php',
            'web_server.command.server_start' => __DIR__.'/getWebServer_Command_ServerStartService.php',
            'web_server.command.server_status' => __DIR__.'/getWebServer_Command_ServerStatusService.php',
            'web_server.command.server_stop' => __DIR__.'/getWebServer_Command_ServerStopService.php',
        );
        $this->privates = array(
            'ApiPlatform\\Core\\DataProvider\\CollectionDataProviderInterface' => true,
            'ApiPlatform\\Core\\DataProvider\\ItemDataProviderInterface' => true,
            'ApiPlatform\\Core\\DataProvider\\SubresourceDataProviderInterface' => true,
            'ApiPlatform\\Core\\Metadata\\Property\\Factory\\PropertyNameCollectionFactoryInterface' => true,
            'api_platform.metadata.property.metadata_factory' => true,
            'api_platform.metadata.resource.metadata_factory' => true,
            'api_platform.metadata.resource.name_collection_factory' => true,
            'api_platform.serializer' => true,
            'doctrine.orm.default_metadata_cache' => true,
            'doctrine.orm.default_query_cache' => true,
            'doctrine.orm.default_result_cache' => true,
            'session.storage' => true,
            'swiftmailer.mailer' => true,
            'swiftmailer.plugin.messagelogger' => true,
            'swiftmailer.spool' => true,
            'swiftmailer.transport' => true,
            'swiftmailer.transport.real' => true,
            'ApiPlatform\\Core\\Api\\IriConverterInterface' => true,
            'ApiPlatform\\Core\\Api\\UrlGeneratorInterface' => true,
            'ApiPlatform\\Core\\Bridge\\Doctrine\\Orm\\Extension\\EagerLoadingExtension' => true,
            'ApiPlatform\\Core\\Bridge\\Doctrine\\Orm\\Extension\\FilterEagerLoadingExtension' => true,
            'ApiPlatform\\Core\\Bridge\\Doctrine\\Orm\\Extension\\FilterExtension' => true,
            'ApiPlatform\\Core\\Bridge\\Doctrine\\Orm\\Extension\\OrderExtension' => true,
            'ApiPlatform\\Core\\Bridge\\Doctrine\\Orm\\Extension\\PaginationExtension' => true,
            'ApiPlatform\\Core\\Metadata\\Property\\Factory\\PropertyMetadataFactoryInterface' => true,
            'ApiPlatform\\Core\\Metadata\\Resource\\Factory\\ResourceMetadataFactoryInterface' => true,
            'ApiPlatform\\Core\\Metadata\\Resource\\Factory\\ResourceNameCollectionFactoryInterface' => true,
            'ApiPlatform\\Core\\Serializer\\SerializerContextBuilderInterface' => true,
            'AppBundle\\Form\\LoisirsType' => true,
            'annotation_reader' => true,
            'annotations.cache_warmer' => true,
            'annotations.reader' => true,
            'api_platform.cache.identifiers_extractor' => true,
            'api_platform.cache.metadata.property' => true,
            'api_platform.cache.metadata.resource' => true,
            'api_platform.cache.route_name_resolver' => true,
            'api_platform.cache.subresource_operation_factory' => true,
            'api_platform.collection_data_provider' => true,
            'api_platform.doctrine.listener.view.write' => true,
            'api_platform.filter_locator' => true,
            'api_platform.http_cache.listener.response.configure' => true,
            'api_platform.hydra.listener.response.add_link_header' => true,
            'api_platform.item_data_provider' => true,
            'api_platform.jsonld.context_builder' => true,
            'api_platform.listener.exception' => true,
            'api_platform.listener.exception.validation' => true,
            'api_platform.listener.request.add_format' => true,
            'api_platform.listener.request.deserialize' => true,
            'api_platform.listener.request.read' => true,
            'api_platform.listener.view.respond' => true,
            'api_platform.listener.view.serialize' => true,
            'api_platform.listener.view.validate' => true,
            'api_platform.metadata.extractor.xml' => true,
            'api_platform.metadata.extractor.yaml' => true,
            'api_platform.metadata.property.name_collection_factory' => true,
            'api_platform.operation_method_resolver' => true,
            'api_platform.operation_path_resolver.custom' => true,
            'api_platform.operation_path_resolver.default' => true,
            'api_platform.path_segment_name_generator' => true,
            'api_platform.resource_class_resolver' => true,
            'api_platform.security.listener.request.deny_access' => true,
            'api_platform.subresource_data_provider' => true,
            'api_platform.subresource_operation_factory.cached' => true,
            'api_platform.swagger.command.swagger_command' => true,
            'api_platform.swagger.listener.ui' => true,
            'api_platform.swagger.normalizer.documentation' => true,
            'argument_metadata_factory' => true,
            'argument_resolver.default' => true,
            'argument_resolver.request' => true,
            'argument_resolver.request_attribute' => true,
            'argument_resolver.service' => true,
            'argument_resolver.session' => true,
            'argument_resolver.variadic' => true,
            'assets.context' => true,
            'assets.packages' => true,
            'cache.annotations' => true,
            'cache.default_clearer' => true,
            'cache.serializer' => true,
            'cache.validator' => true,
            'config.resource.self_checking_resource_checker' => true,
            'config_cache_factory' => true,
            'console.command.about' => true,
            'console.command.assets_install' => true,
            'console.command.cache_clear' => true,
            'console.command.cache_pool_clear' => true,
            'console.command.cache_pool_prune' => true,
            'console.command.cache_warmup' => true,
            'console.command.config_debug' => true,
            'console.command.config_dump_reference' => true,
            'console.command.container_debug' => true,
            'console.command.debug_autowiring' => true,
            'console.command.event_dispatcher_debug' => true,
            'console.command.form_debug' => true,
            'console.command.router_debug' => true,
            'console.command.router_match' => true,
            'console.command.xliff_lint' => true,
            'console.command.yaml_lint' => true,
            'console.error_listener' => true,
            'controller_name_converter' => true,
            'data_collector.form' => true,
            'data_collector.form.extractor' => true,
            'data_collector.request' => true,
            'data_collector.router' => true,
            'debug.argument_resolver' => true,
            'debug.controller_resolver' => true,
            'debug.debug_handlers_listener' => true,
            'debug.dump_listener' => true,
            'debug.event_dispatcher' => true,
            'debug.file_link_formatter' => true,
            'debug.log_processor' => true,
            'debug.security.access.decision_manager' => true,
            'debug.stopwatch' => true,
            'dependency_injection.config.container_parameters_resource_checker' => true,
            'deprecated.form.registry' => true,
            'deprecated.form.registry.csrf' => true,
            'doctrine.cache_clear_metadata_command' => true,
            'doctrine.cache_clear_query_cache_command' => true,
            'doctrine.cache_clear_result_command' => true,
            'doctrine.cache_collection_region_command' => true,
            'doctrine.clear_entity_region_command' => true,
            'doctrine.clear_query_region_command' => true,
            'doctrine.database_create_command' => true,
            'doctrine.database_drop_command' => true,
            'doctrine.database_import_command' => true,
            'doctrine.dbal.connection_factory' => true,
            'doctrine.dbal.logger.profiling.default' => true,
            'doctrine.ensure_production_settings_command' => true,
            'doctrine.generate_entities_command' => true,
            'doctrine.mapping_convert_command' => true,
            'doctrine.mapping_import_command' => true,
            'doctrine.mapping_info_command' => true,
            'doctrine.orm.default_entity_listener_resolver' => true,
            'doctrine.orm.default_entity_manager.property_info_extractor' => true,
            'doctrine.orm.default_listeners.attach_entity_listeners' => true,
            'doctrine.orm.default_manager_configurator' => true,
            'doctrine.orm.proxy_cache_warmer' => true,
            'doctrine.orm.validator.unique' => true,
            'doctrine.orm.validator_initializer' => true,
            'doctrine.query_dql_command' => true,
            'doctrine.query_sql_command' => true,
            'doctrine.schema_create_command' => true,
            'doctrine.schema_drop_command' => true,
            'doctrine.schema_update_command' => true,
            'doctrine.schema_validate_command' => true,
            'doctrine_cache.contains_command' => true,
            'doctrine_cache.delete_command' => true,
            'doctrine_cache.flush_command' => true,
            'doctrine_cache.providers.doctrine.orm.default_metadata_cache' => true,
            'doctrine_cache.providers.doctrine.orm.default_query_cache' => true,
            'doctrine_cache.providers.doctrine.orm.default_result_cache' => true,
            'doctrine_cache.stats_command' => true,
            'file_locator' => true,
            'form.registry' => true,
            'form.resolved_type_factory' => true,
            'form.server_params' => true,
            'form.type.choice' => true,
            'form.type.entity' => true,
            'form.type.form' => true,
            'form.type_extension.csrf' => true,
            'form.type_extension.form.data_collector' => true,
            'form.type_extension.form.http_foundation' => true,
            'form.type_extension.form.validator' => true,
            'form.type_extension.repeated.validator' => true,
            'form.type_extension.submit.validator' => true,
            'form.type_extension.upload.validator' => true,
            'form.type_guesser.doctrine' => true,
            'form.type_guesser.validator' => true,
            'fragment.handler' => true,
            'fragment.listener' => true,
            'fragment.renderer.hinclude' => true,
            'fragment.renderer.inline' => true,
            'framework_extra_bundle.argument_name_convertor' => true,
            'framework_extra_bundle.event.is_granted' => true,
            'kernel.class_cache.cache_warmer' => true,
            'locale_listener' => true,
            'logger' => true,
            'monolog.activation_strategy.not_found' => true,
            'monolog.handler.console' => true,
            'monolog.handler.fingers_crossed.error_level_activation_strategy' => true,
            'monolog.handler.main' => true,
            'monolog.handler.null_internal' => true,
            'monolog.handler.server_log' => true,
            'monolog.logger.cache' => true,
            'monolog.logger.console' => true,
            'monolog.logger.doctrine' => true,
            'monolog.logger.event' => true,
            'monolog.logger.php' => true,
            'monolog.logger.profiler' => true,
            'monolog.logger.request' => true,
            'monolog.logger.security' => true,
            'profiler_listener' => true,
            'property_accessor' => true,
            'property_info' => true,
            'property_info.reflection_extractor' => true,
            'property_info.serializer_extractor' => true,
            'resolve_controller_name_subscriber' => true,
            'response_listener' => true,
            'router.cache_warmer' => true,
            'router.request_context' => true,
            'router_listener' => true,
            'security.access.authenticated_voter' => true,
            'security.access.expression_voter' => true,
            'security.access.simple_role_voter' => true,
            'security.access_listener' => true,
            'security.access_map' => true,
            'security.authentication.guard_handler' => true,
            'security.authentication.listener.anonymous.main' => true,
            'security.authentication.manager' => true,
            'security.authentication.provider.anonymous.main' => true,
            'security.authentication.trust_resolver' => true,
            'security.channel_listener' => true,
            'security.command.user_password_encoder' => true,
            'security.context_listener.0' => true,
            'security.encoder_factory' => true,
            'security.firewall' => true,
            'security.firewall.map' => true,
            'security.firewall.map.context.dev' => true,
            'security.firewall.map.context.main' => true,
            'security.logout_url_generator' => true,
            'security.rememberme.response_listener' => true,
            'security.request_matcher.zfhj2lw' => true,
            'security.role_hierarchy' => true,
            'security.user.provider.concrete.in_memory' => true,
            'security.user_value_resolver' => true,
            'security.validator.user_password' => true,
            'sensio_distribution.security_checker' => true,
            'sensio_distribution.security_checker.command' => true,
            'sensio_framework_extra.cache.listener' => true,
            'sensio_framework_extra.controller.listener' => true,
            'sensio_framework_extra.converter.listener' => true,
            'sensio_framework_extra.converter.manager' => true,
            'sensio_framework_extra.security.listener' => true,
            'sensio_framework_extra.view.listener' => true,
            'serializer.mapping.cache.symfony' => true,
            'serializer.mapping.cache_warmer' => true,
            'serializer.mapping.class_metadata_factory' => true,
            'session.handler' => true,
            'session.save_listener' => true,
            'session.storage.filesystem' => true,
            'session.storage.metadata_bag' => true,
            'session.storage.native' => true,
            'session.storage.php_bridge' => true,
            'session_listener' => true,
            'streamed_response_listener' => true,
            'swiftmailer.email_sender.listener' => true,
            'swiftmailer.mailer.default.spool' => true,
            'swiftmailer.mailer.default.transport' => true,
            'swiftmailer.mailer.default.transport.eventdispatcher' => true,
            'templating.helper.logout_url' => true,
            'templating.helper.security' => true,
            'twig.cache_warmer' => true,
            'twig.command.debug' => true,
            'twig.command.lint' => true,
            'twig.exception_listener' => true,
            'twig.form.renderer' => true,
            'twig.loader' => true,
            'twig.profile' => true,
            'twig.runtime.httpkernel' => true,
            'twig.template_cache_warmer' => true,
            'twig.translation.extractor' => true,
            'uri_signer' => true,
            'validate_request_listener' => true,
            'validator.builder' => true,
            'validator.email' => true,
            'validator.expression' => true,
            'validator.mapping.cache_warmer' => true,
            'var_dumper.cli_dumper' => true,
            'web_profiler.csp.handler' => true,
            'web_profiler.debug_toolbar' => true,
            'web_server.command.server_log' => true,
            'web_server.command.server_run' => true,
            'web_server.command.server_start' => true,
            'web_server.command.server_status' => true,
            'web_server.command.server_stop' => true,
        );
        $this->aliases = array(
            'ApiPlatform\\Core\\DataProvider\\CollectionDataProviderInterface' => 'api_platform.collection_data_provider',
            'ApiPlatform\\Core\\DataProvider\\ItemDataProviderInterface' => 'api_platform.item_data_provider',
            'ApiPlatform\\Core\\DataProvider\\SubresourceDataProviderInterface' => 'api_platform.subresource_data_provider',
            'ApiPlatform\\Core\\Metadata\\Property\\Factory\\PropertyNameCollectionFactoryInterface' => 'api_platform.metadata.property.name_collection_factory',
            'api_platform.action.delete_item' => 'api_platform.action.placeholder',
            'api_platform.action.get_collection' => 'api_platform.action.placeholder',
            'api_platform.action.get_item' => 'api_platform.action.placeholder',
            'api_platform.action.get_subresource' => 'api_platform.action.placeholder',
            'api_platform.action.post_collection' => 'api_platform.action.placeholder',
            'api_platform.action.put_item' => 'api_platform.action.placeholder',
            'api_platform.metadata.property.metadata_factory' => 'ApiPlatform\\Core\\Metadata\\Property\\Factory\\PropertyMetadataFactoryInterface',
            'api_platform.metadata.resource.metadata_factory' => 'ApiPlatform\\Core\\Metadata\\Resource\\Factory\\ResourceMetadataFactoryInterface',
            'api_platform.metadata.resource.name_collection_factory' => 'ApiPlatform\\Core\\Metadata\\Resource\\Factory\\ResourceNameCollectionFactoryInterface',
            'api_platform.serializer' => 'serializer',
            'cache.app_clearer' => 'cache.default_clearer',
            'console.command.apiplatform_core_bridge_symfony_bundle_command_swaggercommand' => 'api_platform.swagger.command.swagger_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'doctrine_cache.contains_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'doctrine_cache.delete_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'doctrine_cache.flush_command',
            'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'doctrine_cache.stats_command',
            'console.command.sensiolabs_security_command_securitycheckercommand' => 'sensio_distribution.security_checker.command',
            'database_connection' => 'doctrine.dbal.default_connection',
            'doctrine.orm.default_metadata_cache' => 'doctrine_cache.providers.doctrine.orm.default_metadata_cache',
            'doctrine.orm.default_query_cache' => 'doctrine_cache.providers.doctrine.orm.default_query_cache',
            'doctrine.orm.default_result_cache' => 'doctrine_cache.providers.doctrine.orm.default_result_cache',
            'doctrine.orm.entity_manager' => 'doctrine.orm.default_entity_manager',
            'event_dispatcher' => 'debug.event_dispatcher',
            'mailer' => 'swiftmailer.mailer.default',
            'session.storage' => 'session.storage.native',
            'swiftmailer.mailer' => 'swiftmailer.mailer.default',
            'swiftmailer.plugin.messagelogger' => 'swiftmailer.mailer.default.plugin.messagelogger',
            'swiftmailer.spool' => 'swiftmailer.mailer.default.spool',
            'swiftmailer.transport' => 'swiftmailer.mailer.default.transport',
            'swiftmailer.transport.real' => 'swiftmailer.mailer.default.transport.real',
        );

        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Controller/ControllerNameParser.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/ControllerMetadata/ArgumentMetadataFactoryInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/ControllerMetadata/ArgumentMetadataFactory.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/EventDispatcher/EventSubscriberInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/ResponseListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/StreamedResponseListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/LocaleListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/ValidateRequestListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/EventListener/ResolveControllerNameSubscriber.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/HttpKernelInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/TerminableInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/HttpKernel.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpFoundation/RequestStack.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/UriSigner.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Config/ConfigCacheFactoryInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Config/ResourceCheckerConfigCacheFactory.php';
        include_once $this->targetDirs[3].'/vendor/psr/cache/src/CacheItemPoolInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Adapter/AdapterInterface.php';
        include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/ResettableInterface.php';
        include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerAwareTrait.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Traits/AbstractTrait.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Adapter/AbstractAdapter.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/PruneableInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Traits/FilesystemCommonTrait.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Traits/FilesystemTrait.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Adapter/FilesystemAdapter.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Adapter/TraceableAdapter.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/MessageSelector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/TranslatorInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Translation/IdentityTranslator.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/DependencyInjection/ServiceLocator.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/AbstractSessionListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/SessionListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/SaveSessionListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/VersionStrategy/VersionStrategyInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/VersionStrategy/EmptyVersionStrategy.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/PackageInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/Package.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/PathPackage.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/Packages.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/Context/ContextInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Asset/Context/RequestStackContext.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/ConstraintValidatorFactoryInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/ContainerConstraintValidatorFactory.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Validation.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/FragmentListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Profiler/ProfilerStorageInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Profiler/FileProfilerStorage.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/DataCollectorInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/DataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/LateDataCollectorInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/TimeDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/MemoryDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/DataCollector/ValidatorDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/AjaxDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/ExceptionDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/LoggerDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/EventDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/DataCollector/CacheDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/DataCollector/SecurityDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/DataCollector/TwigDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Doctrine/DataCollector/DoctrineDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/DataCollector/DoctrineDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/DataCollector/MessageDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/ConfigDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Profiler/Profiler.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/ProfilerListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/RequestDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/DataCollector/RequestDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/RouterDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/DataCollector/RouterDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Extension/DataCollector/FormDataExtractorInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Extension/DataCollector/FormDataExtractor.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Extension/DataCollector/FormDataCollectorInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Extension/DataCollector/FormDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/DebugHandlersListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Debug/FileLinkFormatter.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Stopwatch/Stopwatch.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/EventDispatcher/EventDispatcherInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/EventDispatcher/EventDispatcher.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/EventDispatcher/ContainerAwareEventDispatcher.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/EventDispatcher/Debug/TraceableEventDispatcherInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/EventDispatcher/Debug/TraceableEventDispatcher.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Debug/TraceableEventDispatcher.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/ArgumentResolverInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/ControllerResolverInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/ControllerResolver.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/ContainerControllerResolver.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Controller/ControllerResolver.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/TraceableControllerResolver.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/ArgumentResolver.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Controller/TraceableArgumentResolver.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/Log/DebugLoggerInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Monolog/Processor/DebugProcessor.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/RequestContext.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/EventListener/RouterListener.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationRegistry.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/Reader.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/AnnotationReader.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Traits/ArrayTrait.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Adapter/ArrayAdapter.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/PropertyAccess/PropertyAccessorInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/PropertyAccess/PropertyAccessor.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Normalizer/NormalizerInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Hydra/Serializer/ConstraintViolationListNormalizer.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Hydra/Serializer/DocumentationNormalizer.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Hydra/Serializer/EntrypointNormalizer.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Problem/Serializer/ErrorNormalizerTrait.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Hydra/Serializer/ErrorNormalizer.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Normalizer/NormalizerAwareInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/ContextTrait.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/JsonLd/Serializer/JsonLdContextTrait.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Normalizer/NormalizerAwareTrait.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Hydra/Serializer/CollectionNormalizer.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Hydra/Serializer/PartialCollectionViewNormalizer.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/FilterLocatorTrait.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Hydra/Serializer/CollectionFiltersNormalizer.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Problem/Serializer/ConstraintViolationListNormalizer.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/SerializerAwareInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/SerializerAwareTrait.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Normalizer/SerializerAwareNormalizer.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Normalizer/DenormalizerInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Normalizer/ObjectToPopulateTrait.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Normalizer/AbstractNormalizer.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Normalizer/AbstractObjectNormalizer.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/AbstractItemNormalizer.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/JsonLd/Serializer/ItemNormalizer.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Problem/Serializer/ErrorNormalizer.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/ItemNormalizer.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Normalizer/JsonSerializableNormalizer.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Normalizer/DateTimeNormalizer.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Normalizer/DateIntervalNormalizer.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Normalizer/DataUriNormalizer.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Normalizer/ArrayDenormalizer.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Normalizer/ObjectNormalizer.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Encoder/SerializerAwareEncoder.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Encoder/EncoderInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Encoder/DecoderInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Encoder/NormalizationAwareInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Encoder/XmlEncoder.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Encoder/JsonEncoder.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Encoder/YamlEncoder.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Encoder/CsvEncoder.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/JsonEncoder.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/SerializerInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Serializer.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Mapping/Loader/LoaderInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Mapping/Loader/LoaderChain.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Mapping/Factory/ClassMetadataFactoryInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Mapping/Factory/ClassResolverTrait.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Serializer/Mapping/Factory/ClassMetadataFactory.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/PropertyInfo/PropertyTypeExtractorInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/PropertyInfo/PropertyDescriptionExtractorInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/PropertyInfo/PropertyAccessExtractorInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/PropertyInfo/PropertyListExtractorInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/PropertyInfo/PropertyInfoExtractorInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/PropertyInfo/PropertyInfoExtractor.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authorization/AuthorizationCheckerInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authorization/AuthorizationChecker.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authentication/Token/Storage/TokenStorageInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authentication/Token/Storage/TokenStorage.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authentication/AuthenticationManagerInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authentication/AuthenticationProviderManager.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authentication/AuthenticationTrustResolverInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authentication/AuthenticationTrustResolver.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Role/RoleHierarchyInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Role/RoleHierarchy.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Security/FirewallMap.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/FirewallMapInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Logout/LogoutUrlGenerator.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/RememberMe/ResponseListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authorization/AccessDecisionManagerInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authorization/AccessDecisionManager.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authorization/TraceableAccessDecisionManager.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ExtensionInterface.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/LogoutUrlExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/SecurityExtension.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/Profiler.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/ProfilerExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/TranslationExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/AssetExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/CodeExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/RoutingExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/YamlExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/StopwatchExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/ExpressionExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/HttpKernelExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/HttpFoundationExtension.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/Debug.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Extension/InitRuntimeInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/FormExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/WebLinkExtension.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Twig/DoctrineExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/VarDumper/Dumper/DataDumperInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/VarDumper/Cloner/DumperInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/VarDumper/Dumper/AbstractDumper.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/VarDumper/Dumper/CliDumper.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/VarDumper/Dumper/HtmlDumper.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Extension/DumpExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Twig/WebProfilerExtension.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/AppVariable.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/RuntimeLoaderInterface.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ContainerRuntimeLoader.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/DependencyInjection/Configurator/EnvironmentConfigurator.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Environment.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Profiler/Profile.php';
        include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Processor/PsrLogMessageProcessor.php';
        include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/HandlerInterface.php';
        include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/AbstractHandler.php';
        include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/AbstractProcessingHandler.php';
        include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Handler/StreamHandler.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Monolog/Handler/ConsoleHandler.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Monolog/Handler/ServerLogHandler.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/ConnectionRegistry.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/ManagerRegistry.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/common/lib/Doctrine/Common/Persistence/AbstractManagerRegistry.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/DependencyInjection/ContainerAwareInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Doctrine/ManagerRegistry.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Doctrine/RegistryInterface.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Registry.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/SQLLogger.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/dbal/lib/Doctrine/DBAL/Logging/DebugStack.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/ObjectInitializerInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Doctrine/Validator/DoctrineInitializer.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/ControllerListener.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/ParamConverterListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/ExpressionLanguage/ExpressionLanguage.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/ParamConverterInterface.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/DoctrineParamConverter.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/DateTimeParamConverter.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ParamConverter/ParamConverterManager.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Templating/TemplateGuesser.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/TemplateListener.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/HttpCacheListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Core/Authorization/ExpressionLanguage.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Security/ExpressionLanguage.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/SecurityListener.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/EventListener/IsGrantedListener.php';
        include_once $this->targetDirs[3].'/vendor/sensio/framework-extra-bundle/Request/ArgumentNameConverter.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/ResourceClassResolverInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Util/ClassInfoTrait.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/ResourceClassResolver.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/OperationMethodResolverInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/OperationMethodResolverInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/OperationMethodResolver.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/PathResolver/OperationPathResolverInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/PathResolver/OperationPathResolver.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/PathResolver/CustomOperationPathResolver.php';
        include_once $this->targetDirs[3].'/vendor/willdurand/negotiation/src/Negotiation/AbstractNegotiator.php';
        include_once $this->targetDirs[3].'/vendor/willdurand/negotiation/src/Negotiation/Negotiator.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/EventListener/AddFormatListener.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/EventListener/ReadListener.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/EventListener/DeserializeListener.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Operation/Factory/SubresourceOperationFactoryInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Operation/Factory/SubresourceOperationFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Operation/Factory/CachedSubresourceOperationFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/ItemDataProviderInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Util/IdentifierManagerTrait.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/ItemDataProvider.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/ChainItemDataProvider.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/CollectionDataProviderInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/CollectionDataProvider.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/ChainCollectionDataProvider.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/SubresourceDataProviderInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/SubresourceDataProvider.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/DataProvider/ChainSubresourceDataProvider.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Security/ExpressionLanguage.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Security/EventListener/DenyAccessListener.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Extractor/ExtractorInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Extractor/AbstractExtractor.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Extractor/XmlExtractor.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Extractor/YamlExtractor.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/RouterOperationPathResolver.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Swagger/Serializer/DocumentationNormalizer.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/EventListener/SwaggerUiListener.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/JsonLd/ContextBuilderInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/JsonLd/ContextBuilder.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Hydra/EventListener/AddLinkHeaderListener.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/HttpCache/EventListener/AddHeadersListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/DataCollector/DumpDataCollector.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/VarDumper/Cloner/ClonerInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/VarDumper/Cloner/AbstractCloner.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/VarDumper/Cloner/VarCloner.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Csp/NonceGenerator.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Csp/ContentSecurityPolicyHandler.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/EventListener/WebDebugToolbarListener.php';
        include_once $this->targetDirs[3].'/vendor/psr/log/Psr/Log/LoggerInterface.php';
        include_once $this->targetDirs[3].'/vendor/monolog/monolog/src/Monolog/Logger.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Monolog/Logger.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/RequestContextAwareInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/Matcher/UrlMatcherInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/Generator/UrlGeneratorInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/RouterInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/Matcher/RequestMatcherInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Routing/Router.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/HttpKernel/CacheWarmer/WarmableInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/DependencyInjection/ServiceSubscriberInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Routing/Router.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Traits/ProxyTrait.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Traits/PhpArrayTrait.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/Adapter/PhpArrayAdapter.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/Cache.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/FlushableCache.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/ClearableCache.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiGetCache.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/MultiPutCache.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/cache/lib/Doctrine/Common/Cache/CacheProvider.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Cache/DoctrineProvider.php';
        include_once $this->targetDirs[3].'/vendor/doctrine/annotations/lib/Doctrine/Common/Annotations/CachedReader.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Security/Http/Firewall.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/EventListener/FirewallListener.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Debug/TraceableFirewallListener.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Operation/PathSegmentNameGeneratorInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Operation/UnderscorePathSegmentNameGenerator.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/UrlGeneratorInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/Router.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/RouteNameResolverInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/RouteNameResolver.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/CachedRouteNameResolver.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/IdentifiersExtractorInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/IdentifiersExtractor.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/CachedIdentifiersExtractor.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Api/IriConverterInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Routing/IriConverter.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/SerializerContextBuilderInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/SerializerContextBuilder.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Serializer/SerializerFilterContextBuilder.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/ResourceNameCollectionFactoryInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/ExtractorResourceNameCollectionFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/AnnotationResourceNameCollectionFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/CachedResourceNameCollectionFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/ResourceMetadataFactoryInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/ExtractorResourceMetadataFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/AnnotationResourceMetadataFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/ShortNameResourceMetadataFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/OperationResourceMetadataFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Resource/Factory/CachedResourceMetadataFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/PropertyNameCollectionFactoryInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/PropertyInfo/Metadata/Property/PropertyInfoPropertyNameCollectionFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/InheritedPropertyNameCollectionFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/ExtractorPropertyNameCollectionFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/CachedPropertyNameCollectionFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/PropertyMetadataFactoryInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/ExtractorPropertyMetadataFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/PropertyInfo/Metadata/Property/PropertyInfoPropertyMetadataFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/InheritedPropertyMetadataFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/AnnotationPropertyMetadataFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Metadata/Property/DoctrineOrmPropertyMetadataFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/SerializerPropertyMetadataFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/AnnotationSubresourceMetadataFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Validator/Metadata/Property/ValidatorPropertyMetadataFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Metadata/Property/Factory/CachedPropertyMetadataFactory.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryCollectionExtensionInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryItemExtensionInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Util/EagerLoadingTrait.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/EagerLoadingExtension.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/FilterExtension.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/FilterEagerLoadingExtension.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/QueryResultCollectionExtensionInterface.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/PaginationExtension.php';
        include_once $this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Doctrine/Orm/Extension/OrderExtension.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/LoaderInterface.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/ExistsLoaderInterface.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/SourceContextLoaderInterface.php';
        include_once $this->targetDirs[3].'/vendor/twig/twig/lib/Twig/Loader/Filesystem.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Mapping/Factory/MetadataFactoryInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Validator/ValidatorInterface.php';
        include_once $this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Validator/Validator/TraceableValidator.php';
    }

    public function getRemovedIds()
    {
        return require __DIR__.'/removed-ids.php';
    }

    public function compile()
    {
        throw new LogicException('You cannot compile a dumped container that was already compiled.');
    }

    public function isCompiled()
    {
        return true;
    }

    public function isFrozen()
    {
        @trigger_error(sprintf('The %s() method is deprecated since Symfony 3.3 and will be removed in 4.0. Use the isCompiled() method instead.', __METHOD__), E_USER_DEPRECATED);

        return true;
    }

    protected function load($file, $lazyLoad = true)
    {
        return require $file;
    }

    /**
     * Gets the public 'cache.app' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AppService()
    {
        $a = new \Symfony\Component\Cache\Adapter\FilesystemAdapter('vjnXQrAhpD', 0, ($this->targetDirs[0].'/pools'));
        $a->setLogger(${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'});

        return $this->services['cache.app'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter($a);
    }

    /**
     * Gets the public 'cache.system' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SystemService()
    {
        return $this->services['cache.system'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('IJluAMDwYL', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the public 'data_collector.dump' shared service.
     *
     * @return \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector
     */
    protected function getDataCollector_DumpService()
    {
        return $this->services['data_collector.dump'] = new \Symfony\Component\HttpKernel\DataCollector\DumpDataCollector(${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, 'UTF-8', ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, NULL);
    }

    /**
     * Gets the public 'doctrine' shared service.
     *
     * @return \Doctrine\Bundle\DoctrineBundle\Registry
     */
    protected function getDoctrineService()
    {
        return $this->services['doctrine'] = new \Doctrine\Bundle\DoctrineBundle\Registry($this, $this->parameters['doctrine.connections'], $this->parameters['doctrine.entity_managers'], 'default', 'default');
    }

    /**
     * Gets the public 'http_kernel' shared service.
     *
     * @return \Symfony\Component\HttpKernel\HttpKernel
     */
    protected function getHttpKernelService()
    {
        return $this->services['http_kernel'] = new \Symfony\Component\HttpKernel\HttpKernel(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['debug.controller_resolver']) ? $this->services['debug.controller_resolver'] : $this->getDebug_ControllerResolverService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->getDebug_ArgumentResolverService()) && false ?: '_'});
    }

    /**
     * Gets the public 'profiler' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Profiler\Profiler
     */
    protected function getProfilerService()
    {
        $a = ${($_ = isset($this->services['monolog.logger.profiler']) ? $this->services['monolog.logger.profiler'] : $this->getMonolog_Logger_ProfilerService()) && false ?: '_'};

        $this->services['profiler'] = $instance = new \Symfony\Component\HttpKernel\Profiler\Profiler(new \Symfony\Component\HttpKernel\Profiler\FileProfilerStorage(('file:'.$this->targetDirs[0].'/profiler')), $a, true);

        $b = ${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'};

        $c = new \Symfony\Component\Cache\DataCollector\CacheDataCollector();
        $c->addInstance('cache.app', ${($_ = isset($this->services['cache.app']) ? $this->services['cache.app'] : $this->getCache_AppService()) && false ?: '_'});
        $c->addInstance('cache.system', ${($_ = isset($this->services['cache.system']) ? $this->services['cache.system'] : $this->getCache_SystemService()) && false ?: '_'});
        $c->addInstance('cache.validator', ${($_ = isset($this->services['cache.validator']) ? $this->services['cache.validator'] : $this->getCache_ValidatorService()) && false ?: '_'});
        $c->addInstance('cache.serializer', ${($_ = isset($this->services['cache.serializer']) ? $this->services['cache.serializer'] : $this->getCache_SerializerService()) && false ?: '_'});
        $c->addInstance('cache.annotations', ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'});

        $d = new \Doctrine\Bundle\DoctrineBundle\DataCollector\DoctrineDataCollector(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
        $d->addLogger('default', ${($_ = isset($this->services['doctrine.dbal.logger.profiling.default']) ? $this->services['doctrine.dbal.logger.profiling.default'] : $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack()) && false ?: '_'});

        $e = new \Symfony\Component\HttpKernel\DataCollector\ConfigDataCollector();
        if ($this->has('kernel')) {
            $e->setKernel($b);
        }

        $instance->add(${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector()) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\TimeDataCollector($b, ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\MemoryDataCollector());
        $instance->add(new \Symfony\Component\Validator\DataCollector\ValidatorDataCollector(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\AjaxDataCollector());
        $instance->add(${($_ = isset($this->services['data_collector.form']) ? $this->services['data_collector.form'] : $this->getDataCollector_FormService()) && false ?: '_'});
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\ExceptionDataCollector());
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\LoggerDataCollector($a, ($this->targetDirs[0].'/appDevDebugProjectContainer')));
        $instance->add(new \Symfony\Component\HttpKernel\DataCollector\EventDataCollector(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}));
        $instance->add(${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()) && false ?: '_'});
        $instance->add($c);
        $instance->add(new \Symfony\Bundle\SecurityBundle\DataCollector\SecurityDataCollector(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array())) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'}));
        $instance->add(new \Symfony\Bridge\Twig\DataCollector\TwigDataCollector(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : $this->services['twig.profile'] = new \Twig\Profiler\Profile()) && false ?: '_'}, ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}));
        $instance->add($d);
        $instance->add(new \Symfony\Bundle\SwiftmailerBundle\DataCollector\MessageDataCollector($this));
        $instance->add(${($_ = isset($this->services['data_collector.dump']) ? $this->services['data_collector.dump'] : $this->getDataCollector_DumpService()) && false ?: '_'});
        $instance->add($e);

        return $instance;
    }

    /**
     * Gets the public 'request_stack' shared service.
     *
     * @return \Symfony\Component\HttpFoundation\RequestStack
     */
    protected function getRequestStackService()
    {
        return $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack();
    }

    /**
     * Gets the public 'router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Routing\Router
     */
    protected function getRouterService()
    {
        $this->services['router'] = $instance = new \Symfony\Bundle\FrameworkBundle\Routing\Router($this, ($this->targetDirs[3].'/app/config/routing_dev.yml'), array('cache_dir' => $this->targetDirs[0], 'debug' => true, 'generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator', 'generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper', 'generator_cache_class' => 'appDevDebugProjectContainerUrlGenerator', 'matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher', 'matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper', 'matcher_cache_class' => 'appDevDebugProjectContainerUrlMatcher', 'strict_requirements' => true), ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'});

        $instance->setConfigCacheFactory(${($_ = isset($this->services['config_cache_factory']) ? $this->services['config_cache_factory'] : $this->getConfigCacheFactoryService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the public 'security.authorization_checker' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\AuthorizationChecker
     */
    protected function getSecurity_AuthorizationCheckerService()
    {
        return $this->services['security.authorization_checker'] = new \Symfony\Component\Security\Core\Authorization\AuthorizationChecker(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authentication.manager']) ? $this->services['security.authentication.manager'] : $this->getSecurity_Authentication_ManagerService()) && false ?: '_'}, ${($_ = isset($this->services['debug.security.access.decision_manager']) ? $this->services['debug.security.access.decision_manager'] : $this->getDebug_Security_Access_DecisionManagerService()) && false ?: '_'}, false);
    }

    /**
     * Gets the public 'security.token_storage' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage
     */
    protected function getSecurity_TokenStorageService()
    {
        return $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage();
    }

    /**
     * Gets the public 'serializer' shared service.
     *
     * @return \Symfony\Component\Serializer\Serializer
     */
    protected function getSerializerService()
    {
        $a = ${($_ = isset($this->services['ApiPlatform\Core\Api\UrlGeneratorInterface']) ? $this->services['ApiPlatform\Core\Api\UrlGeneratorInterface'] : $this->getUrlGeneratorInterfaceService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface'] : $this->getResourceMetadataFactoryInterfaceService()) && false ?: '_'};
        $c = ${($_ = isset($this->services['api_platform.metadata.property.name_collection_factory']) ? $this->services['api_platform.metadata.property.name_collection_factory'] : $this->getApiPlatform_Metadata_Property_NameCollectionFactoryService()) && false ?: '_'};
        $d = ${($_ = isset($this->services['ApiPlatform\Core\Metadata\Property\Factory\PropertyMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Property\Factory\PropertyMetadataFactoryInterface'] : $this->getPropertyMetadataFactoryInterfaceService()) && false ?: '_'};
        $e = ${($_ = isset($this->services['api_platform.resource_class_resolver']) ? $this->services['api_platform.resource_class_resolver'] : $this->getApiPlatform_ResourceClassResolverService()) && false ?: '_'};
        $f = ${($_ = isset($this->services['ApiPlatform\Core\Api\IriConverterInterface']) ? $this->services['ApiPlatform\Core\Api\IriConverterInterface'] : $this->getIriConverterInterfaceService()) && false ?: '_'};
        $g = ${($_ = isset($this->services['api_platform.jsonld.context_builder']) ? $this->services['api_platform.jsonld.context_builder'] : $this->getApiPlatform_Jsonld_ContextBuilderService()) && false ?: '_'};
        $h = ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->getPropertyAccessorService()) && false ?: '_'};
        $i = ${($_ = isset($this->services['serializer.mapping.class_metadata_factory']) ? $this->services['serializer.mapping.class_metadata_factory'] : $this->getSerializer_Mapping_ClassMetadataFactoryService()) && false ?: '_'};

        return $this->services['serializer'] = new \Symfony\Component\Serializer\Serializer(array(0 => new \ApiPlatform\Core\Hydra\Serializer\ConstraintViolationListNormalizer($a), 1 => new \ApiPlatform\Core\Hydra\Serializer\DocumentationNormalizer($b, $c, $d, $e, ${($_ = isset($this->services['api_platform.operation_method_resolver']) ? $this->services['api_platform.operation_method_resolver'] : $this->getApiPlatform_OperationMethodResolverService()) && false ?: '_'}, $a, ${($_ = isset($this->services['api_platform.subresource_operation_factory.cached']) ? $this->services['api_platform.subresource_operation_factory.cached'] : $this->getApiPlatform_SubresourceOperationFactory_CachedService()) && false ?: '_'}), 2 => new \ApiPlatform\Core\Hydra\Serializer\EntrypointNormalizer($b, $f, $a), 3 => new \ApiPlatform\Core\Hydra\Serializer\ErrorNormalizer($a, true), 4 => ${($_ = isset($this->services['api_platform.swagger.normalizer.documentation']) ? $this->services['api_platform.swagger.normalizer.documentation'] : $this->getApiPlatform_Swagger_Normalizer_DocumentationService()) && false ?: '_'}, 5 => new \ApiPlatform\Core\Hydra\Serializer\CollectionFiltersNormalizer(new \ApiPlatform\Core\Hydra\Serializer\PartialCollectionViewNormalizer(new \ApiPlatform\Core\Hydra\Serializer\CollectionNormalizer($g, $e, $f), 'page', 'pagination'), $b, $e, ${($_ = isset($this->services['api_platform.filter_locator']) ? $this->services['api_platform.filter_locator'] : $this->services['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array())) && false ?: '_'}), 6 => new \ApiPlatform\Core\Problem\Serializer\ConstraintViolationListNormalizer(), 7 => new \ApiPlatform\Core\JsonLd\Serializer\ItemNormalizer($b, $c, $d, $f, $e, $g, $h, NULL, $i), 8 => new \ApiPlatform\Core\Problem\Serializer\ErrorNormalizer(true), 9 => new \ApiPlatform\Core\Serializer\ItemNormalizer($c, $d, $f, $e, $h, NULL, $i), 10 => new \Symfony\Component\Serializer\Normalizer\JsonSerializableNormalizer(), 11 => new \Symfony\Component\Serializer\Normalizer\DateTimeNormalizer(), 12 => new \Symfony\Component\Serializer\Normalizer\DateIntervalNormalizer(), 13 => new \Symfony\Component\Serializer\Normalizer\DataUriNormalizer(), 14 => new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), 15 => new \Symfony\Component\Serializer\Normalizer\ObjectNormalizer($i, NULL, $h, ${($_ = isset($this->services['property_info']) ? $this->services['property_info'] : $this->getPropertyInfoService()) && false ?: '_'})), array(0 => new \Symfony\Component\Serializer\Encoder\XmlEncoder(), 1 => new \Symfony\Component\Serializer\Encoder\JsonEncoder(), 2 => new \Symfony\Component\Serializer\Encoder\YamlEncoder(), 3 => new \Symfony\Component\Serializer\Encoder\CsvEncoder(), 4 => new \ApiPlatform\Core\Serializer\JsonEncoder('jsonld'), 5 => new \ApiPlatform\Core\Serializer\JsonEncoder('jsonproblem')));
    }

    /**
     * Gets the public 'translator' shared service.
     *
     * @return \Symfony\Component\Translation\IdentityTranslator
     */
    protected function getTranslatorService()
    {
        return $this->services['translator'] = new \Symfony\Component\Translation\IdentityTranslator(new \Symfony\Component\Translation\MessageSelector());
    }

    /**
     * Gets the public 'twig' shared service.
     *
     * @return \Twig\Environment
     */
    protected function getTwigService()
    {
        $this->services['twig'] = $instance = new \Twig\Environment(${($_ = isset($this->services['twig.loader']) ? $this->services['twig.loader'] : $this->getTwig_LoaderService()) && false ?: '_'}, array('debug' => true, 'strict_variables' => true, 'exception_controller' => 'twig.controller.exception:showAction', 'form_themes' => $this->parameters['twig.form.resources'], 'autoescape' => 'name', 'cache' => ($this->targetDirs[0].'/twig'), 'charset' => 'UTF-8', 'default_path' => ($this->targetDirs[3].'/templates'), 'paths' => array(), 'date' => array('format' => 'F j, Y H:i', 'interval_format' => '%d days', 'timezone' => NULL), 'number_format' => array('decimals' => 0, 'decimal_point' => '.', 'thousands_separator' => ',')));

        $a = ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'};
        $b = ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'};
        $c = ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'};

        $d = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 0);
        $d->setDisplayOptions(array('fileLinkFormat' => $b));

        $e = new \Symfony\Component\VarDumper\Dumper\HtmlDumper(NULL, 'UTF-8', 1);
        $e->setDisplayOptions(array('maxStringLength' => 4096, 'fileLinkFormat' => $b));

        $f = new \Symfony\Bridge\Twig\AppVariable();
        $f->setEnvironment('dev');
        $f->setDebug(true);
        if ($this->has('security.token_storage')) {
            $f->setTokenStorage(${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});
        }
        if ($this->has('request_stack')) {
            $f->setRequestStack($c);
        }

        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\LogoutUrlExtension(${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\SecurityExtension(${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ProfilerExtension(${($_ = isset($this->services['twig.profile']) ? $this->services['twig.profile'] : $this->services['twig.profile'] = new \Twig\Profiler\Profile()) && false ?: '_'}, $a));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\TranslationExtension(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\AssetExtension(${($_ = isset($this->services['assets.packages']) ? $this->services['assets.packages'] : $this->getAssets_PackagesService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\CodeExtension($b, ($this->targetDirs[3].'/app'), 'UTF-8'));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\RoutingExtension(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\YamlExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\StopwatchExtension($a, true));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\ExpressionExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpKernelExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\HttpFoundationExtension($c, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}));
        $instance->addExtension(new \Twig\Extension\DebugExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\FormExtension(array(0 => $this, 1 => 'twig.form.renderer')));
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\WebLinkExtension($c));
        $instance->addExtension(new \Doctrine\Bundle\DoctrineBundle\Twig\DoctrineExtension());
        $instance->addExtension(new \Symfony\Bridge\Twig\Extension\DumpExtension(${($_ = isset($this->services['var_dumper.cloner']) ? $this->services['var_dumper.cloner'] : $this->getVarDumper_ClonerService()) && false ?: '_'}, $d));
        $instance->addExtension(new \Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension($e));
        $instance->addGlobal('app', $f);
        $instance->addRuntimeLoader(new \Twig\RuntimeLoader\ContainerRuntimeLoader(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Twig\\Extension\\HttpKernelRuntime' => function () {
            return ${($_ = isset($this->services['twig.runtime.httpkernel']) ? $this->services['twig.runtime.httpkernel'] : $this->load(__DIR__.'/getTwig_Runtime_HttpkernelService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Form\\FormRenderer' => function () {
            return ${($_ = isset($this->services['twig.form.renderer']) ? $this->services['twig.form.renderer'] : $this->load(__DIR__.'/getTwig_Form_RendererService.php')) && false ?: '_'};
        }))));
        (new \Symfony\Bundle\TwigBundle\DependencyInjection\Configurator\EnvironmentConfigurator('F j, Y H:i', '%d days', NULL, 0, '.', ','))->configure($instance);

        return $instance;
    }

    /**
     * Gets the public 'validator' shared service.
     *
     * @return \Symfony\Component\Validator\Validator\TraceableValidator
     */
    protected function getValidatorService()
    {
        return $this->services['validator'] = new \Symfony\Component\Validator\Validator\TraceableValidator(${($_ = isset($this->services['validator.builder']) ? $this->services['validator.builder'] : $this->getValidator_BuilderService()) && false ?: '_'}->getValidator());
    }

    /**
     * Gets the public 'var_dumper.cloner' shared service.
     *
     * @return \Symfony\Component\VarDumper\Cloner\VarCloner
     */
    protected function getVarDumper_ClonerService()
    {
        $this->services['var_dumper.cloner'] = $instance = new \Symfony\Component\VarDumper\Cloner\VarCloner();

        $instance->setMaxItems(2500);
        $instance->setMinDepth(1);
        $instance->setMaxString(-1);

        return $instance;
    }

    /**
     * Gets the private 'ApiPlatform\Core\Api\IriConverterInterface' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Routing\IriConverter
     */
    protected function getIriConverterInterfaceService()
    {
        $a = ${($_ = isset($this->services['ApiPlatform\Core\Api\UrlGeneratorInterface']) ? $this->services['ApiPlatform\Core\Api\UrlGeneratorInterface'] : $this->getUrlGeneratorInterfaceService()) && false ?: '_'};
        $b = ${($_ = isset($this->services['api_platform.metadata.property.name_collection_factory']) ? $this->services['api_platform.metadata.property.name_collection_factory'] : $this->getApiPlatform_Metadata_Property_NameCollectionFactoryService()) && false ?: '_'};
        $c = ${($_ = isset($this->services['ApiPlatform\Core\Metadata\Property\Factory\PropertyMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Property\Factory\PropertyMetadataFactoryInterface'] : $this->getPropertyMetadataFactoryInterfaceService()) && false ?: '_'};
        $d = ${($_ = isset($this->services['property_accessor']) ? $this->services['property_accessor'] : $this->getPropertyAccessorService()) && false ?: '_'};

        return $this->services['ApiPlatform\Core\Api\IriConverterInterface'] = new \ApiPlatform\Core\Bridge\Symfony\Routing\IriConverter($b, $c, ${($_ = isset($this->services['api_platform.item_data_provider']) ? $this->services['api_platform.item_data_provider'] : $this->getApiPlatform_ItemDataProviderService()) && false ?: '_'}, new \ApiPlatform\Core\Bridge\Symfony\Routing\CachedRouteNameResolver(${($_ = isset($this->services['api_platform.cache.route_name_resolver']) ? $this->services['api_platform.cache.route_name_resolver'] : $this->services['api_platform.cache.route_name_resolver'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter()) && false ?: '_'}, new \ApiPlatform\Core\Bridge\Symfony\Routing\RouteNameResolver($a)), $a, $d, new \ApiPlatform\Core\Api\CachedIdentifiersExtractor(${($_ = isset($this->services['api_platform.cache.identifiers_extractor']) ? $this->services['api_platform.cache.identifiers_extractor'] : $this->services['api_platform.cache.identifiers_extractor'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter()) && false ?: '_'}, new \ApiPlatform\Core\Api\IdentifiersExtractor($b, $c, $d), $d));
    }

    /**
     * Gets the private 'ApiPlatform\Core\Api\UrlGeneratorInterface' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Routing\Router
     */
    protected function getUrlGeneratorInterfaceService()
    {
        return $this->services['ApiPlatform\Core\Api\UrlGeneratorInterface'] = new \ApiPlatform\Core\Bridge\Symfony\Routing\Router(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension
     */
    protected function getEagerLoadingExtensionService()
    {
        return $this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension(${($_ = isset($this->services['api_platform.metadata.property.name_collection_factory']) ? $this->services['api_platform.metadata.property.name_collection_factory'] : $this->getApiPlatform_Metadata_Property_NameCollectionFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['ApiPlatform\Core\Metadata\Property\Factory\PropertyMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Property\Factory\PropertyMetadataFactoryInterface'] : $this->getPropertyMetadataFactoryInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface'] : $this->getResourceMetadataFactoryInterfaceService()) && false ?: '_'}, 30, true, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['ApiPlatform\Core\Serializer\SerializerContextBuilderInterface']) ? $this->services['ApiPlatform\Core\Serializer\SerializerContextBuilderInterface'] : $this->getSerializerContextBuilderInterfaceService()) && false ?: '_'}, false, ${($_ = isset($this->services['serializer.mapping.class_metadata_factory']) ? $this->services['serializer.mapping.class_metadata_factory'] : $this->getSerializer_Mapping_ClassMetadataFactoryService()) && false ?: '_'});
    }

    /**
     * Gets the private 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterEagerLoadingExtension' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterEagerLoadingExtension
     */
    protected function getFilterEagerLoadingExtensionService()
    {
        return $this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterEagerLoadingExtension'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterEagerLoadingExtension(${($_ = isset($this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface'] : $this->getResourceMetadataFactoryInterfaceService()) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterExtension' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterExtension
     */
    protected function getFilterExtensionService()
    {
        return $this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterExtension'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterExtension(${($_ = isset($this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface'] : $this->getResourceMetadataFactoryInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['api_platform.filter_locator']) ? $this->services['api_platform.filter_locator'] : $this->services['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array())) && false ?: '_'});
    }

    /**
     * Gets the private 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension
     */
    protected function getOrderExtensionService()
    {
        return $this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension('ASC', ${($_ = isset($this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface'] : $this->getResourceMetadataFactoryInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the private 'ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension
     */
    protected function getPaginationExtensionService()
    {
        return $this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension'] = new \ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface'] : $this->getResourceMetadataFactoryInterfaceService()) && false ?: '_'}, true, false, false, 30, 'page', 'pagination', 'itemsPerPage', NULL);
    }

    /**
     * Gets the private 'ApiPlatform\Core\Metadata\Property\Factory\PropertyMetadataFactoryInterface' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyMetadataFactory
     */
    protected function getPropertyMetadataFactoryInterfaceService()
    {
        $a = ${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'};

        return $this->services['ApiPlatform\Core\Metadata\Property\Factory\PropertyMetadataFactoryInterface'] = new \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyMetadataFactory(${($_ = isset($this->services['api_platform.cache.metadata.property']) ? $this->services['api_platform.cache.metadata.property'] : $this->services['api_platform.cache.metadata.property'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter()) && false ?: '_'}, new \ApiPlatform\Core\Bridge\Symfony\Validator\Metadata\Property\ValidatorPropertyMetadataFactory(${($_ = isset($this->services['validator']) ? $this->services['validator'] : $this->getValidatorService()) && false ?: '_'}, new \ApiPlatform\Core\Metadata\Property\Factory\AnnotationSubresourceMetadataFactory($a, new \ApiPlatform\Core\Metadata\Property\Factory\SerializerPropertyMetadataFactory(${($_ = isset($this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface'] : $this->getResourceMetadataFactoryInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['serializer.mapping.class_metadata_factory']) ? $this->services['serializer.mapping.class_metadata_factory'] : $this->getSerializer_Mapping_ClassMetadataFactoryService()) && false ?: '_'}, new \ApiPlatform\Core\Bridge\Doctrine\Orm\Metadata\Property\DoctrineOrmPropertyMetadataFactory(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyMetadataFactory(${($_ = isset($this->services['api_platform.metadata.extractor.yaml']) ? $this->services['api_platform.metadata.extractor.yaml'] : $this->services['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor(array())) && false ?: '_'}, new \ApiPlatform\Core\Metadata\Property\Factory\AnnotationPropertyMetadataFactory($a, new \ApiPlatform\Core\Metadata\Property\Factory\InheritedPropertyMetadataFactory(${($_ = isset($this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceNameCollectionFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceNameCollectionFactoryInterface'] : $this->getResourceNameCollectionFactoryInterfaceService()) && false ?: '_'}, new \ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyMetadataFactory(${($_ = isset($this->services['property_info']) ? $this->services['property_info'] : $this->getPropertyInfoService()) && false ?: '_'}, new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyMetadataFactory(${($_ = isset($this->services['api_platform.metadata.extractor.xml']) ? $this->services['api_platform.metadata.extractor.xml'] : $this->services['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor(array())) && false ?: '_'}))))))))));
    }

    /**
     * Gets the private 'ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceMetadataFactory
     */
    protected function getResourceMetadataFactoryInterfaceService()
    {
        return $this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface'] = new \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceMetadataFactory(${($_ = isset($this->services['api_platform.cache.metadata.resource']) ? $this->services['api_platform.cache.metadata.resource'] : $this->services['api_platform.cache.metadata.resource'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter()) && false ?: '_'}, new \ApiPlatform\Core\Metadata\Resource\Factory\OperationResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\ShortNameResourceMetadataFactory(new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceMetadataFactory(${($_ = isset($this->services['api_platform.metadata.extractor.yaml']) ? $this->services['api_platform.metadata.extractor.yaml'] : $this->services['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor(array())) && false ?: '_'}, new \ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceMetadataFactory(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'}, new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceMetadataFactory(${($_ = isset($this->services['api_platform.metadata.extractor.xml']) ? $this->services['api_platform.metadata.extractor.xml'] : $this->services['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor(array())) && false ?: '_'}))))));
    }

    /**
     * Gets the private 'ApiPlatform\Core\Metadata\Resource\Factory\ResourceNameCollectionFactoryInterface' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceNameCollectionFactory
     */
    protected function getResourceNameCollectionFactoryInterfaceService()
    {
        return $this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceNameCollectionFactoryInterface'] = new \ApiPlatform\Core\Metadata\Resource\Factory\CachedResourceNameCollectionFactory(${($_ = isset($this->services['api_platform.cache.metadata.resource']) ? $this->services['api_platform.cache.metadata.resource'] : $this->services['api_platform.cache.metadata.resource'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter()) && false ?: '_'}, new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceNameCollectionFactory(${($_ = isset($this->services['api_platform.metadata.extractor.yaml']) ? $this->services['api_platform.metadata.extractor.yaml'] : $this->services['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor(array())) && false ?: '_'}, new \ApiPlatform\Core\Metadata\Resource\Factory\AnnotationResourceNameCollectionFactory(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'}, $this->getParameter('api_platform.resource_class_directories'), new \ApiPlatform\Core\Metadata\Resource\Factory\ExtractorResourceNameCollectionFactory(${($_ = isset($this->services['api_platform.metadata.extractor.xml']) ? $this->services['api_platform.metadata.extractor.xml'] : $this->services['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor(array())) && false ?: '_'}))));
    }

    /**
     * Gets the private 'ApiPlatform\Core\Serializer\SerializerContextBuilderInterface' shared service.
     *
     * @return \ApiPlatform\Core\Serializer\SerializerFilterContextBuilder
     */
    protected function getSerializerContextBuilderInterfaceService()
    {
        $a = ${($_ = isset($this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface'] : $this->getResourceMetadataFactoryInterfaceService()) && false ?: '_'};

        return $this->services['ApiPlatform\Core\Serializer\SerializerContextBuilderInterface'] = new \ApiPlatform\Core\Serializer\SerializerFilterContextBuilder($a, ${($_ = isset($this->services['api_platform.filter_locator']) ? $this->services['api_platform.filter_locator'] : $this->services['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array())) && false ?: '_'}, new \ApiPlatform\Core\Serializer\SerializerContextBuilder($a));
    }

    /**
     * Gets the private 'annotation_reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\CachedReader
     */
    protected function getAnnotationReaderService()
    {
        return $this->services['annotation_reader'] = new \Doctrine\Common\Annotations\CachedReader(${($_ = isset($this->services['annotations.reader']) ? $this->services['annotations.reader'] : $this->getAnnotations_ReaderService()) && false ?: '_'}, new \Symfony\Component\Cache\DoctrineProvider(\Symfony\Component\Cache\Adapter\PhpArrayAdapter::create(($this->targetDirs[0].'/annotations.php'), ${($_ = isset($this->services['cache.annotations']) ? $this->services['cache.annotations'] : $this->getCache_AnnotationsService()) && false ?: '_'})), true);
    }

    /**
     * Gets the private 'annotations.reader' shared service.
     *
     * @return \Doctrine\Common\Annotations\AnnotationReader
     */
    protected function getAnnotations_ReaderService()
    {
        $this->services['annotations.reader'] = $instance = new \Doctrine\Common\Annotations\AnnotationReader();

        $a = new \Doctrine\Common\Annotations\AnnotationRegistry();
        $a->registerLoader('class_exists');

        $instance->addGlobalIgnoredName('required', $a);

        return $instance;
    }

    /**
     * Gets the private 'api_platform.cache.identifiers_extractor' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getApiPlatform_Cache_IdentifiersExtractorService()
    {
        return $this->services['api_platform.cache.identifiers_extractor'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'api_platform.cache.metadata.property' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getApiPlatform_Cache_Metadata_PropertyService()
    {
        return $this->services['api_platform.cache.metadata.property'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'api_platform.cache.metadata.resource' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getApiPlatform_Cache_Metadata_ResourceService()
    {
        return $this->services['api_platform.cache.metadata.resource'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'api_platform.cache.route_name_resolver' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getApiPlatform_Cache_RouteNameResolverService()
    {
        return $this->services['api_platform.cache.route_name_resolver'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'api_platform.cache.subresource_operation_factory' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\ArrayAdapter
     */
    protected function getApiPlatform_Cache_SubresourceOperationFactoryService()
    {
        return $this->services['api_platform.cache.subresource_operation_factory'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter();
    }

    /**
     * Gets the private 'api_platform.collection_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\DataProvider\ChainCollectionDataProvider
     */
    protected function getApiPlatform_CollectionDataProviderService()
    {
        return $this->services['api_platform.collection_data_provider'] = new \ApiPlatform\Core\DataProvider\ChainCollectionDataProvider(array(0 => new \ApiPlatform\Core\Bridge\Doctrine\Orm\CollectionDataProvider(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, array(0 => ${($_ = isset($this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension']) ? $this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension'] : $this->getEagerLoadingExtensionService()) && false ?: '_'}, 1 => ${($_ = isset($this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterExtension']) ? $this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterExtension'] : $this->getFilterExtensionService()) && false ?: '_'}, 2 => ${($_ = isset($this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterEagerLoadingExtension']) ? $this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterEagerLoadingExtension'] : $this->getFilterEagerLoadingExtensionService()) && false ?: '_'}, 3 => ${($_ = isset($this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension']) ? $this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension'] : $this->getOrderExtensionService()) && false ?: '_'}, 4 => ${($_ = isset($this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension']) ? $this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension'] : $this->getPaginationExtensionService()) && false ?: '_'}))));
    }

    /**
     * Gets the private 'api_platform.filter_locator' shared service.
     *
     * @return \Symfony\Component\DependencyInjection\ServiceLocator
     */
    protected function getApiPlatform_FilterLocatorService()
    {
        return $this->services['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array());
    }

    /**
     * Gets the private 'api_platform.http_cache.listener.response.configure' shared service.
     *
     * @return \ApiPlatform\Core\HttpCache\EventListener\AddHeadersListener
     */
    protected function getApiPlatform_HttpCache_Listener_Response_ConfigureService()
    {
        return $this->services['api_platform.http_cache.listener.response.configure'] = new \ApiPlatform\Core\HttpCache\EventListener\AddHeadersListener(true, NULL, NULL, $this->parameters['api_platform.http_cache.vary'], NULL);
    }

    /**
     * Gets the private 'api_platform.hydra.listener.response.add_link_header' shared service.
     *
     * @return \ApiPlatform\Core\Hydra\EventListener\AddLinkHeaderListener
     */
    protected function getApiPlatform_Hydra_Listener_Response_AddLinkHeaderService()
    {
        return $this->services['api_platform.hydra.listener.response.add_link_header'] = new \ApiPlatform\Core\Hydra\EventListener\AddLinkHeaderListener(${($_ = isset($this->services['ApiPlatform\Core\Api\UrlGeneratorInterface']) ? $this->services['ApiPlatform\Core\Api\UrlGeneratorInterface'] : $this->getUrlGeneratorInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the private 'api_platform.item_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\DataProvider\ChainItemDataProvider
     */
    protected function getApiPlatform_ItemDataProviderService()
    {
        return $this->services['api_platform.item_data_provider'] = new \ApiPlatform\Core\DataProvider\ChainItemDataProvider(array(0 => new \ApiPlatform\Core\Bridge\Doctrine\Orm\ItemDataProvider(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, ${($_ = isset($this->services['api_platform.metadata.property.name_collection_factory']) ? $this->services['api_platform.metadata.property.name_collection_factory'] : $this->getApiPlatform_Metadata_Property_NameCollectionFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['ApiPlatform\Core\Metadata\Property\Factory\PropertyMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Property\Factory\PropertyMetadataFactoryInterface'] : $this->getPropertyMetadataFactoryInterfaceService()) && false ?: '_'}, array(0 => ${($_ = isset($this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension']) ? $this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension'] : $this->getEagerLoadingExtensionService()) && false ?: '_'}))));
    }

    /**
     * Gets the private 'api_platform.jsonld.context_builder' shared service.
     *
     * @return \ApiPlatform\Core\JsonLd\ContextBuilder
     */
    protected function getApiPlatform_Jsonld_ContextBuilderService()
    {
        return $this->services['api_platform.jsonld.context_builder'] = new \ApiPlatform\Core\JsonLd\ContextBuilder(${($_ = isset($this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceNameCollectionFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceNameCollectionFactoryInterface'] : $this->getResourceNameCollectionFactoryInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface'] : $this->getResourceMetadataFactoryInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['api_platform.metadata.property.name_collection_factory']) ? $this->services['api_platform.metadata.property.name_collection_factory'] : $this->getApiPlatform_Metadata_Property_NameCollectionFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['ApiPlatform\Core\Metadata\Property\Factory\PropertyMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Property\Factory\PropertyMetadataFactoryInterface'] : $this->getPropertyMetadataFactoryInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['ApiPlatform\Core\Api\UrlGeneratorInterface']) ? $this->services['ApiPlatform\Core\Api\UrlGeneratorInterface'] : $this->getUrlGeneratorInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the private 'api_platform.listener.request.add_format' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\AddFormatListener
     */
    protected function getApiPlatform_Listener_Request_AddFormatService()
    {
        return $this->services['api_platform.listener.request.add_format'] = new \ApiPlatform\Core\EventListener\AddFormatListener(new \Negotiation\Negotiator(), $this->parameters['api_platform.formats']);
    }

    /**
     * Gets the private 'api_platform.listener.request.deserialize' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\DeserializeListener
     */
    protected function getApiPlatform_Listener_Request_DeserializeService()
    {
        return $this->services['api_platform.listener.request.deserialize'] = new \ApiPlatform\Core\EventListener\DeserializeListener(${($_ = isset($this->services['serializer']) ? $this->services['serializer'] : $this->getSerializerService()) && false ?: '_'}, ${($_ = isset($this->services['ApiPlatform\Core\Serializer\SerializerContextBuilderInterface']) ? $this->services['ApiPlatform\Core\Serializer\SerializerContextBuilderInterface'] : $this->getSerializerContextBuilderInterfaceService()) && false ?: '_'}, $this->parameters['api_platform.formats']);
    }

    /**
     * Gets the private 'api_platform.listener.request.read' shared service.
     *
     * @return \ApiPlatform\Core\EventListener\ReadListener
     */
    protected function getApiPlatform_Listener_Request_ReadService()
    {
        return $this->services['api_platform.listener.request.read'] = new \ApiPlatform\Core\EventListener\ReadListener(${($_ = isset($this->services['api_platform.collection_data_provider']) ? $this->services['api_platform.collection_data_provider'] : $this->getApiPlatform_CollectionDataProviderService()) && false ?: '_'}, ${($_ = isset($this->services['api_platform.item_data_provider']) ? $this->services['api_platform.item_data_provider'] : $this->getApiPlatform_ItemDataProviderService()) && false ?: '_'}, ${($_ = isset($this->services['api_platform.subresource_data_provider']) ? $this->services['api_platform.subresource_data_provider'] : $this->getApiPlatform_SubresourceDataProviderService()) && false ?: '_'});
    }

    /**
     * Gets the private 'api_platform.metadata.extractor.xml' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Extractor\XmlExtractor
     */
    protected function getApiPlatform_Metadata_Extractor_XmlService()
    {
        return $this->services['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor(array());
    }

    /**
     * Gets the private 'api_platform.metadata.extractor.yaml' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Extractor\YamlExtractor
     */
    protected function getApiPlatform_Metadata_Extractor_YamlService()
    {
        return $this->services['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor(array());
    }

    /**
     * Gets the private 'api_platform.metadata.property.name_collection_factory' shared service.
     *
     * @return \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyNameCollectionFactory
     */
    protected function getApiPlatform_Metadata_Property_NameCollectionFactoryService()
    {
        return $this->services['api_platform.metadata.property.name_collection_factory'] = new \ApiPlatform\Core\Metadata\Property\Factory\CachedPropertyNameCollectionFactory(${($_ = isset($this->services['api_platform.cache.metadata.property']) ? $this->services['api_platform.cache.metadata.property'] : $this->services['api_platform.cache.metadata.property'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter()) && false ?: '_'}, new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyNameCollectionFactory(${($_ = isset($this->services['api_platform.metadata.extractor.yaml']) ? $this->services['api_platform.metadata.extractor.yaml'] : $this->services['api_platform.metadata.extractor.yaml'] = new \ApiPlatform\Core\Metadata\Extractor\YamlExtractor(array())) && false ?: '_'}, new \ApiPlatform\Core\Metadata\Property\Factory\ExtractorPropertyNameCollectionFactory(${($_ = isset($this->services['api_platform.metadata.extractor.xml']) ? $this->services['api_platform.metadata.extractor.xml'] : $this->services['api_platform.metadata.extractor.xml'] = new \ApiPlatform\Core\Metadata\Extractor\XmlExtractor(array())) && false ?: '_'}, new \ApiPlatform\Core\Metadata\Property\Factory\InheritedPropertyNameCollectionFactory(${($_ = isset($this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceNameCollectionFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceNameCollectionFactoryInterface'] : $this->getResourceNameCollectionFactoryInterfaceService()) && false ?: '_'}, new \ApiPlatform\Core\Bridge\Symfony\PropertyInfo\Metadata\Property\PropertyInfoPropertyNameCollectionFactory(${($_ = isset($this->services['property_info']) ? $this->services['property_info'] : $this->getPropertyInfoService()) && false ?: '_'})))));
    }

    /**
     * Gets the private 'api_platform.operation_method_resolver' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Routing\OperationMethodResolver
     */
    protected function getApiPlatform_OperationMethodResolverService()
    {
        return $this->services['api_platform.operation_method_resolver'] = new \ApiPlatform\Core\Bridge\Symfony\Routing\OperationMethodResolver(${($_ = isset($this->services['ApiPlatform\Core\Api\UrlGeneratorInterface']) ? $this->services['ApiPlatform\Core\Api\UrlGeneratorInterface'] : $this->getUrlGeneratorInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface'] : $this->getResourceMetadataFactoryInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the private 'api_platform.operation_path_resolver.custom' shared service.
     *
     * @return \ApiPlatform\Core\PathResolver\CustomOperationPathResolver
     */
    protected function getApiPlatform_OperationPathResolver_CustomService()
    {
        return $this->services['api_platform.operation_path_resolver.custom'] = new \ApiPlatform\Core\PathResolver\CustomOperationPathResolver(new \ApiPlatform\Core\PathResolver\OperationPathResolver(${($_ = isset($this->services['api_platform.path_segment_name_generator']) ? $this->services['api_platform.path_segment_name_generator'] : $this->services['api_platform.path_segment_name_generator'] = new \ApiPlatform\Core\Operation\UnderscorePathSegmentNameGenerator()) && false ?: '_'}));
    }

    /**
     * Gets the private 'api_platform.path_segment_name_generator' shared service.
     *
     * @return \ApiPlatform\Core\Operation\UnderscorePathSegmentNameGenerator
     */
    protected function getApiPlatform_PathSegmentNameGeneratorService()
    {
        return $this->services['api_platform.path_segment_name_generator'] = new \ApiPlatform\Core\Operation\UnderscorePathSegmentNameGenerator();
    }

    /**
     * Gets the private 'api_platform.resource_class_resolver' shared service.
     *
     * @return \ApiPlatform\Core\Api\ResourceClassResolver
     */
    protected function getApiPlatform_ResourceClassResolverService()
    {
        return $this->services['api_platform.resource_class_resolver'] = new \ApiPlatform\Core\Api\ResourceClassResolver(${($_ = isset($this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceNameCollectionFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceNameCollectionFactoryInterface'] : $this->getResourceNameCollectionFactoryInterfaceService()) && false ?: '_'});
    }

    /**
     * Gets the private 'api_platform.security.listener.request.deny_access' shared service.
     *
     * @return \ApiPlatform\Core\Security\EventListener\DenyAccessListener
     */
    protected function getApiPlatform_Security_Listener_Request_DenyAccessService()
    {
        return $this->services['api_platform.security.listener.request.deny_access'] = new \ApiPlatform\Core\Security\EventListener\DenyAccessListener(${($_ = isset($this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface'] : $this->getResourceMetadataFactoryInterfaceService()) && false ?: '_'}, new \ApiPlatform\Core\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array())) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'api_platform.subresource_data_provider' shared service.
     *
     * @return \ApiPlatform\Core\DataProvider\ChainSubresourceDataProvider
     */
    protected function getApiPlatform_SubresourceDataProviderService()
    {
        $a = ${($_ = isset($this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension']) ? $this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\EagerLoadingExtension'] : $this->getEagerLoadingExtensionService()) && false ?: '_'};

        return $this->services['api_platform.subresource_data_provider'] = new \ApiPlatform\Core\DataProvider\ChainSubresourceDataProvider(array(0 => new \ApiPlatform\Core\Bridge\Doctrine\Orm\SubresourceDataProvider(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, ${($_ = isset($this->services['api_platform.metadata.property.name_collection_factory']) ? $this->services['api_platform.metadata.property.name_collection_factory'] : $this->getApiPlatform_Metadata_Property_NameCollectionFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['ApiPlatform\Core\Metadata\Property\Factory\PropertyMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Property\Factory\PropertyMetadataFactoryInterface'] : $this->getPropertyMetadataFactoryInterfaceService()) && false ?: '_'}, array(0 => $a, 1 => ${($_ = isset($this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterExtension']) ? $this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterExtension'] : $this->getFilterExtensionService()) && false ?: '_'}, 2 => ${($_ = isset($this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterEagerLoadingExtension']) ? $this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\FilterEagerLoadingExtension'] : $this->getFilterEagerLoadingExtensionService()) && false ?: '_'}, 3 => ${($_ = isset($this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension']) ? $this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\OrderExtension'] : $this->getOrderExtensionService()) && false ?: '_'}, 4 => ${($_ = isset($this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension']) ? $this->services['ApiPlatform\Core\Bridge\Doctrine\Orm\Extension\PaginationExtension'] : $this->getPaginationExtensionService()) && false ?: '_'}), array(0 => $a))));
    }

    /**
     * Gets the private 'api_platform.subresource_operation_factory.cached' shared service.
     *
     * @return \ApiPlatform\Core\Operation\Factory\CachedSubresourceOperationFactory
     */
    protected function getApiPlatform_SubresourceOperationFactory_CachedService()
    {
        return $this->services['api_platform.subresource_operation_factory.cached'] = new \ApiPlatform\Core\Operation\Factory\CachedSubresourceOperationFactory(${($_ = isset($this->services['api_platform.cache.subresource_operation_factory']) ? $this->services['api_platform.cache.subresource_operation_factory'] : $this->services['api_platform.cache.subresource_operation_factory'] = new \Symfony\Component\Cache\Adapter\ArrayAdapter()) && false ?: '_'}, new \ApiPlatform\Core\Operation\Factory\SubresourceOperationFactory(${($_ = isset($this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface'] : $this->getResourceMetadataFactoryInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['api_platform.metadata.property.name_collection_factory']) ? $this->services['api_platform.metadata.property.name_collection_factory'] : $this->getApiPlatform_Metadata_Property_NameCollectionFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['ApiPlatform\Core\Metadata\Property\Factory\PropertyMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Property\Factory\PropertyMetadataFactoryInterface'] : $this->getPropertyMetadataFactoryInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['api_platform.path_segment_name_generator']) ? $this->services['api_platform.path_segment_name_generator'] : $this->services['api_platform.path_segment_name_generator'] = new \ApiPlatform\Core\Operation\UnderscorePathSegmentNameGenerator()) && false ?: '_'}));
    }

    /**
     * Gets the private 'api_platform.swagger.listener.ui' shared service.
     *
     * @return \ApiPlatform\Core\Bridge\Symfony\Bundle\EventListener\SwaggerUiListener
     */
    protected function getApiPlatform_Swagger_Listener_UiService()
    {
        return $this->services['api_platform.swagger.listener.ui'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\EventListener\SwaggerUiListener();
    }

    /**
     * Gets the private 'api_platform.swagger.normalizer.documentation' shared service.
     *
     * @return \ApiPlatform\Core\Swagger\Serializer\DocumentationNormalizer
     */
    protected function getApiPlatform_Swagger_Normalizer_DocumentationService()
    {
        $a = ${($_ = isset($this->services['api_platform.subresource_operation_factory.cached']) ? $this->services['api_platform.subresource_operation_factory.cached'] : $this->getApiPlatform_SubresourceOperationFactory_CachedService()) && false ?: '_'};

        return $this->services['api_platform.swagger.normalizer.documentation'] = new \ApiPlatform\Core\Swagger\Serializer\DocumentationNormalizer(${($_ = isset($this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Resource\Factory\ResourceMetadataFactoryInterface'] : $this->getResourceMetadataFactoryInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['api_platform.metadata.property.name_collection_factory']) ? $this->services['api_platform.metadata.property.name_collection_factory'] : $this->getApiPlatform_Metadata_Property_NameCollectionFactoryService()) && false ?: '_'}, ${($_ = isset($this->services['ApiPlatform\Core\Metadata\Property\Factory\PropertyMetadataFactoryInterface']) ? $this->services['ApiPlatform\Core\Metadata\Property\Factory\PropertyMetadataFactoryInterface'] : $this->getPropertyMetadataFactoryInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['api_platform.resource_class_resolver']) ? $this->services['api_platform.resource_class_resolver'] : $this->getApiPlatform_ResourceClassResolverService()) && false ?: '_'}, ${($_ = isset($this->services['api_platform.operation_method_resolver']) ? $this->services['api_platform.operation_method_resolver'] : $this->getApiPlatform_OperationMethodResolverService()) && false ?: '_'}, new \ApiPlatform\Core\Bridge\Symfony\Routing\RouterOperationPathResolver(${($_ = isset($this->services['ApiPlatform\Core\Api\UrlGeneratorInterface']) ? $this->services['ApiPlatform\Core\Api\UrlGeneratorInterface'] : $this->getUrlGeneratorInterfaceService()) && false ?: '_'}, ${($_ = isset($this->services['api_platform.operation_path_resolver.custom']) ? $this->services['api_platform.operation_path_resolver.custom'] : $this->getApiPlatform_OperationPathResolver_CustomService()) && false ?: '_'}, $a), NULL, ${($_ = isset($this->services['api_platform.filter_locator']) ? $this->services['api_platform.filter_locator'] : $this->services['api_platform.filter_locator'] = new \Symfony\Component\DependencyInjection\ServiceLocator(array())) && false ?: '_'}, NULL, false, 'oauth2', 'application', '/oauth/v2/token', '/oauth/v2/auth', array(), array(), $a, true, 'page', false, 'itemsPerPage');
    }

    /**
     * Gets the private 'argument_metadata_factory' shared service.
     *
     * @return \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory
     */
    protected function getArgumentMetadataFactoryService()
    {
        return $this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory();
    }

    /**
     * Gets the private 'assets.context' shared service.
     *
     * @return \Symfony\Component\Asset\Context\RequestStackContext
     */
    protected function getAssets_ContextService()
    {
        return $this->services['assets.context'] = new \Symfony\Component\Asset\Context\RequestStackContext(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, '', false);
    }

    /**
     * Gets the private 'assets.packages' shared service.
     *
     * @return \Symfony\Component\Asset\Packages
     */
    protected function getAssets_PackagesService()
    {
        return $this->services['assets.packages'] = new \Symfony\Component\Asset\Packages(new \Symfony\Component\Asset\PathPackage('', new \Symfony\Component\Asset\VersionStrategy\EmptyVersionStrategy(), ${($_ = isset($this->services['assets.context']) ? $this->services['assets.context'] : $this->getAssets_ContextService()) && false ?: '_'}), array());
    }

    /**
     * Gets the private 'cache.annotations' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_AnnotationsService()
    {
        return $this->services['cache.annotations'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('JCVBTTDt8Z', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'cache.serializer' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_SerializerService()
    {
        return $this->services['cache.serializer'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('DrddsRTBlZ', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'cache.validator' shared service.
     *
     * @return \Symfony\Component\Cache\Adapter\TraceableAdapter
     */
    protected function getCache_ValidatorService()
    {
        return $this->services['cache.validator'] = new \Symfony\Component\Cache\Adapter\TraceableAdapter(\Symfony\Component\Cache\Adapter\AbstractAdapter::createSystemCache('KOGuYKNX25', 0, $this->getParameter('container.build_id'), ($this->targetDirs[0].'/pools'), ${($_ = isset($this->services['monolog.logger.cache']) ? $this->services['monolog.logger.cache'] : $this->getMonolog_Logger_CacheService()) && false ?: '_'}));
    }

    /**
     * Gets the private 'config_cache_factory' shared service.
     *
     * @return \Symfony\Component\Config\ResourceCheckerConfigCacheFactory
     */
    protected function getConfigCacheFactoryService()
    {
        return $this->services['config_cache_factory'] = new \Symfony\Component\Config\ResourceCheckerConfigCacheFactory(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['dependency_injection.config.container_parameters_resource_checker']) ? $this->services['dependency_injection.config.container_parameters_resource_checker'] : $this->services['dependency_injection.config.container_parameters_resource_checker'] = new \Symfony\Component\DependencyInjection\Config\ContainerParametersResourceChecker($this)) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['config.resource.self_checking_resource_checker']) ? $this->services['config.resource.self_checking_resource_checker'] : $this->services['config.resource.self_checking_resource_checker'] = new \Symfony\Component\Config\Resource\SelfCheckingResourceChecker()) && false ?: '_'};
        }, 2));
    }

    /**
     * Gets the private 'controller_name_converter' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser
     */
    protected function getControllerNameConverterService()
    {
        return $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'});
    }

    /**
     * Gets the private 'data_collector.form' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataCollector
     */
    protected function getDataCollector_FormService()
    {
        return $this->services['data_collector.form'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataCollector(${($_ = isset($this->services['data_collector.form.extractor']) ? $this->services['data_collector.form.extractor'] : $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor()) && false ?: '_'});
    }

    /**
     * Gets the private 'data_collector.form.extractor' shared service.
     *
     * @return \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor
     */
    protected function getDataCollector_Form_ExtractorService()
    {
        return $this->services['data_collector.form.extractor'] = new \Symfony\Component\Form\Extension\DataCollector\FormDataExtractor();
    }

    /**
     * Gets the private 'data_collector.request' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector
     */
    protected function getDataCollector_RequestService()
    {
        return $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector();
    }

    /**
     * Gets the private 'data_collector.router' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector
     */
    protected function getDataCollector_RouterService()
    {
        return $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector();
    }

    /**
     * Gets the private 'debug.argument_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver
     */
    protected function getDebug_ArgumentResolverService()
    {
        return $this->services['debug.argument_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableArgumentResolver(new \Symfony\Component\HttpKernel\Controller\ArgumentResolver(${($_ = isset($this->services['argument_metadata_factory']) ? $this->services['argument_metadata_factory'] : $this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory()) && false ?: '_'}, new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['argument_resolver.request_attribute']) ? $this->services['argument_resolver.request_attribute'] : $this->services['argument_resolver.request_attribute'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestAttributeValueResolver()) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['argument_resolver.request']) ? $this->services['argument_resolver.request'] : $this->services['argument_resolver.request'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\RequestValueResolver()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['argument_resolver.session']) ? $this->services['argument_resolver.session'] : $this->services['argument_resolver.session'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\SessionValueResolver()) && false ?: '_'};
            yield 3 => ${($_ = isset($this->services['security.user_value_resolver']) ? $this->services['security.user_value_resolver'] : $this->load(__DIR__.'/getSecurity_UserValueResolverService.php')) && false ?: '_'};
            yield 4 => ${($_ = isset($this->services['argument_resolver.service']) ? $this->services['argument_resolver.service'] : $this->load(__DIR__.'/getArgumentResolver_ServiceService.php')) && false ?: '_'};
            yield 5 => ${($_ = isset($this->services['argument_resolver.default']) ? $this->services['argument_resolver.default'] : $this->services['argument_resolver.default'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\DefaultValueResolver()) && false ?: '_'};
            yield 6 => ${($_ = isset($this->services['argument_resolver.variadic']) ? $this->services['argument_resolver.variadic'] : $this->services['argument_resolver.variadic'] = new \Symfony\Component\HttpKernel\Controller\ArgumentResolver\VariadicValueResolver()) && false ?: '_'};
        }, 7)), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.controller_resolver' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver
     */
    protected function getDebug_ControllerResolverService()
    {
        return $this->services['debug.controller_resolver'] = new \Symfony\Component\HttpKernel\Controller\TraceableControllerResolver(new \Symfony\Bundle\FrameworkBundle\Controller\ControllerResolver($this, ${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}, ${($_ = isset($this->services['debug.argument_resolver']) ? $this->services['debug.argument_resolver'] : $this->getDebug_ArgumentResolverService()) && false ?: '_'});
    }

    /**
     * Gets the private 'debug.debug_handlers_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener
     */
    protected function getDebug_DebugHandlersListenerService()
    {
        return $this->services['debug.debug_handlers_listener'] = new \Symfony\Component\HttpKernel\EventListener\DebugHandlersListener(NULL, ${($_ = isset($this->services['monolog.logger.php']) ? $this->services['monolog.logger.php'] : $this->getMonolog_Logger_PhpService()) && false ?: '_'}, -1, -1, true, ${($_ = isset($this->services['debug.file_link_formatter']) ? $this->services['debug.file_link_formatter'] : $this->getDebug_FileLinkFormatterService()) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'debug.event_dispatcher' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher
     */
    protected function getDebug_EventDispatcherService()
    {
        $this->services['debug.event_dispatcher'] = $instance = new \Symfony\Component\HttpKernel\Debug\TraceableEventDispatcher(new \Symfony\Component\EventDispatcher\ContainerAwareEventDispatcher($this), ${($_ = isset($this->services['debug.stopwatch']) ? $this->services['debug.stopwatch'] : $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true)) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.event']) ? $this->services['monolog.logger.event'] : $this->getMonolog_Logger_EventService()) && false ?: '_'});

        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.router']) ? $this->services['data_collector.router'] : $this->services['data_collector.router'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RouterDataCollector()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['api_platform.listener.request.add_format']) ? $this->services['api_platform.listener.request.add_format'] : $this->getApiPlatform_Listener_Request_AddFormatService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 7);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['api_platform.listener.request.read']) ? $this->services['api_platform.listener.request.read'] : $this->getApiPlatform_Listener_Request_ReadService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 4);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['api_platform.listener.request.deserialize']) ? $this->services['api_platform.listener.request.deserialize'] : $this->getApiPlatform_Listener_Request_DeserializeService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 2);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['api_platform.listener.view.serialize']) ? $this->services['api_platform.listener.view.serialize'] : $this->load(__DIR__.'/getApiPlatform_Listener_View_SerializeService.php')) && false ?: '_'};
        }, 1 => 'onKernelView'), 16);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['api_platform.listener.view.respond']) ? $this->services['api_platform.listener.view.respond'] : $this->services['api_platform.listener.view.respond'] = new \ApiPlatform\Core\EventListener\RespondListener()) && false ?: '_'};
        }, 1 => 'onKernelView'), 8);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['api_platform.listener.exception.validation']) ? $this->services['api_platform.listener.exception.validation'] : $this->load(__DIR__.'/getApiPlatform_Listener_Exception_ValidationService.php')) && false ?: '_'};
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['api_platform.listener.exception']) ? $this->services['api_platform.listener.exception'] : $this->load(__DIR__.'/getApiPlatform_Listener_ExceptionService.php')) && false ?: '_'};
        }, 1 => 'onKernelException'), -96);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['api_platform.listener.view.validate']) ? $this->services['api_platform.listener.view.validate'] : $this->load(__DIR__.'/getApiPlatform_Listener_View_ValidateService.php')) && false ?: '_'};
        }, 1 => 'onKernelView'), 64);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['api_platform.security.listener.request.deny_access']) ? $this->services['api_platform.security.listener.request.deny_access'] : $this->getApiPlatform_Security_Listener_Request_DenyAccessService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 1);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['api_platform.swagger.listener.ui']) ? $this->services['api_platform.swagger.listener.ui'] : $this->services['api_platform.swagger.listener.ui'] = new \ApiPlatform\Core\Bridge\Symfony\Bundle\EventListener\SwaggerUiListener()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['api_platform.hydra.listener.response.add_link_header']) ? $this->services['api_platform.hydra.listener.response.add_link_header'] : $this->getApiPlatform_Hydra_Listener_Response_AddLinkHeaderService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['api_platform.doctrine.listener.view.write']) ? $this->services['api_platform.doctrine.listener.view.write'] : $this->load(__DIR__.'/getApiPlatform_Doctrine_Listener_View_WriteService.php')) && false ?: '_'};
        }, 1 => 'onKernelView'), 32);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['api_platform.http_cache.listener.response.configure']) ? $this->services['api_platform.http_cache.listener.response.configure'] : $this->getApiPlatform_HttpCache_Listener_Response_ConfigureService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['response_listener']) ? $this->services['response_listener'] : $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8')) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['streamed_response_listener']) ? $this->services['streamed_response_listener'] : $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1024);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 16);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['locale_listener']) ? $this->services['locale_listener'] : $this->getLocaleListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['validate_request_listener']) ? $this->services['validate_request_listener'] : $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 256);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['resolve_controller_name_subscriber']) ? $this->services['resolve_controller_name_subscriber'] : $this->getResolveControllerNameSubscriberService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 24);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load(__DIR__.'/getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleError'), -128);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['console.error_listener']) ? $this->services['console.error_listener'] : $this->load(__DIR__.'/getConsole_ErrorListenerService.php')) && false ?: '_'};
        }, 1 => 'onConsoleTerminate'), -128);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['session_listener']) ? $this->services['session_listener'] : $this->getSessionListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 128);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['session.save_listener']) ? $this->services['session.save_listener'] : $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -1000);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['fragment.listener']) ? $this->services['fragment.listener'] : $this->getFragment_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 48);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -100);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['profiler_listener']) ? $this->services['profiler_listener'] : $this->getProfilerListenerService()) && false ?: '_'};
        }, 1 => 'onKernelTerminate'), -1024);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['data_collector.request']) ? $this->services['data_collector.request'] : $this->services['data_collector.request'] = new \Symfony\Bundle\FrameworkBundle\DataCollector\RequestDataCollector()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['debug.debug_handlers_listener']) ? $this->services['debug.debug_handlers_listener'] : $this->getDebug_DebugHandlersListenerService()) && false ?: '_'};
        }, 1 => 'configure'), 2048);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 32);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['router_listener']) ? $this->services['router_listener'] : $this->getRouterListenerService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['security.rememberme.response_listener']) ? $this->services['security.rememberme.response_listener'] : $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelRequest'), 8);
        $instance->addListener('kernel.finish_request', array(0 => function () {
            return ${($_ = isset($this->services['security.firewall']) ? $this->services['security.firewall'] : $this->getSecurity_FirewallService()) && false ?: '_'};
        }, 1 => 'onKernelFinishRequest'), 0);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['twig.exception_listener']) ? $this->services['twig.exception_listener'] : $this->load(__DIR__.'/getTwig_ExceptionListenerService.php')) && false ?: '_'};
        }, 1 => 'onKernelException'), -128);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'};
        }, 1 => 'onCommand'), 255);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'};
        }, 1 => 'onTerminate'), -255);
        $instance->addListener('kernel.exception', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load(__DIR__.'/getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('kernel.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load(__DIR__.'/getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('console.error', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load(__DIR__.'/getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onException'), 0);
        $instance->addListener('console.terminate', array(0 => function () {
            return ${($_ = isset($this->services['swiftmailer.email_sender.listener']) ? $this->services['swiftmailer.email_sender.listener'] : $this->load(__DIR__.'/getSwiftmailer_EmailSender_ListenerService.php')) && false ?: '_'};
        }, 1 => 'onTerminate'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.controller.listener']) ? $this->services['sensio_framework_extra.controller.listener'] : $this->getSensioFrameworkExtra_Controller_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.converter.listener']) ? $this->services['sensio_framework_extra.converter.listener'] : $this->getSensioFrameworkExtra_Converter_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->getSensioFrameworkExtra_View_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelController'), -128);
        $instance->addListener('kernel.view', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.view.listener']) ? $this->services['sensio_framework_extra.view.listener'] : $this->getSensioFrameworkExtra_View_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelView'), 0);
        $instance->addListener('kernel.controller', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()) && false ?: '_'};
        }, 1 => 'onKernelController'), 0);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.cache.listener']) ? $this->services['sensio_framework_extra.cache.listener'] : $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), 0);
        $instance->addListener('kernel.controller_arguments', array(0 => function () {
            return ${($_ = isset($this->services['sensio_framework_extra.security.listener']) ? $this->services['sensio_framework_extra.security.listener'] : $this->getSensioFrameworkExtra_Security_ListenerService()) && false ?: '_'};
        }, 1 => 'onKernelControllerArguments'), 0);
        $instance->addListener('kernel.controller_arguments', array(0 => function () {
            return ${($_ = isset($this->services['framework_extra_bundle.event.is_granted']) ? $this->services['framework_extra_bundle.event.is_granted'] : $this->getFrameworkExtraBundle_Event_IsGrantedService()) && false ?: '_'};
        }, 1 => 'onKernelControllerArguments'), 0);
        $instance->addListener('console.command', array(0 => function () {
            return ${($_ = isset($this->services['debug.dump_listener']) ? $this->services['debug.dump_listener'] : $this->load(__DIR__.'/getDebug_DumpListenerService.php')) && false ?: '_'};
        }, 1 => 'configure'), 1024);
        $instance->addListener('kernel.response', array(0 => function () {
            return ${($_ = isset($this->services['web_profiler.debug_toolbar']) ? $this->services['web_profiler.debug_toolbar'] : $this->getWebProfiler_DebugToolbarService()) && false ?: '_'};
        }, 1 => 'onKernelResponse'), -128);

        return $instance;
    }

    /**
     * Gets the private 'debug.file_link_formatter' shared service.
     *
     * @return \Symfony\Component\HttpKernel\Debug\FileLinkFormatter
     */
    protected function getDebug_FileLinkFormatterService()
    {
        return $this->services['debug.file_link_formatter'] = new \Symfony\Component\HttpKernel\Debug\FileLinkFormatter(NULL, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, $this->targetDirs[3], '/_profiler/open?file=%f&line=%l#line%l');
    }

    /**
     * Gets the private 'debug.log_processor' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Processor\DebugProcessor
     */
    protected function getDebug_LogProcessorService()
    {
        return $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor();
    }

    /**
     * Gets the private 'debug.security.access.decision_manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager
     */
    protected function getDebug_Security_Access_DecisionManagerService()
    {
        return $this->services['debug.security.access.decision_manager'] = new \Symfony\Component\Security\Core\Authorization\TraceableAccessDecisionManager(new \Symfony\Component\Security\Core\Authorization\AccessDecisionManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.access.authenticated_voter']) ? $this->services['security.access.authenticated_voter'] : $this->load(__DIR__.'/getSecurity_Access_AuthenticatedVoterService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['security.access.simple_role_voter']) ? $this->services['security.access.simple_role_voter'] : $this->services['security.access.simple_role_voter'] = new \Symfony\Component\Security\Core\Authorization\Voter\RoleVoter()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['security.access.expression_voter']) ? $this->services['security.access.expression_voter'] : $this->load(__DIR__.'/getSecurity_Access_ExpressionVoterService.php')) && false ?: '_'};
        }, 3), 'affirmative', false, true));
    }

    /**
     * Gets the private 'debug.stopwatch' shared service.
     *
     * @return \Symfony\Component\Stopwatch\Stopwatch
     */
    protected function getDebug_StopwatchService()
    {
        return $this->services['debug.stopwatch'] = new \Symfony\Component\Stopwatch\Stopwatch(true);
    }

    /**
     * Gets the private 'doctrine.dbal.logger.profiling.default' shared service.
     *
     * @return \Doctrine\DBAL\Logging\DebugStack
     */
    protected function getDoctrine_Dbal_Logger_Profiling_DefaultService()
    {
        return $this->services['doctrine.dbal.logger.profiling.default'] = new \Doctrine\DBAL\Logging\DebugStack();
    }

    /**
     * Gets the private 'doctrine.orm.validator_initializer' shared service.
     *
     * @return \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer
     */
    protected function getDoctrine_Orm_ValidatorInitializerService()
    {
        return $this->services['doctrine.orm.validator_initializer'] = new \Symfony\Bridge\Doctrine\Validator\DoctrineInitializer(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'});
    }

    /**
     * Gets the private 'fragment.listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\FragmentListener
     */
    protected function getFragment_ListenerService()
    {
        return $this->services['fragment.listener'] = new \Symfony\Component\HttpKernel\EventListener\FragmentListener(${($_ = isset($this->services['uri_signer']) ? $this->services['uri_signer'] : $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt')) && false ?: '_'}, '/_fragment');
    }

    /**
     * Gets the private 'framework_extra_bundle.argument_name_convertor' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter
     */
    protected function getFrameworkExtraBundle_ArgumentNameConvertorService()
    {
        return $this->services['framework_extra_bundle.argument_name_convertor'] = new \Sensio\Bundle\FrameworkExtraBundle\Request\ArgumentNameConverter(${($_ = isset($this->services['argument_metadata_factory']) ? $this->services['argument_metadata_factory'] : $this->services['argument_metadata_factory'] = new \Symfony\Component\HttpKernel\ControllerMetadata\ArgumentMetadataFactory()) && false ?: '_'});
    }

    /**
     * Gets the private 'framework_extra_bundle.event.is_granted' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener
     */
    protected function getFrameworkExtraBundle_Event_IsGrantedService()
    {
        return $this->services['framework_extra_bundle.event.is_granted'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\IsGrantedListener(${($_ = isset($this->services['framework_extra_bundle.argument_name_convertor']) ? $this->services['framework_extra_bundle.argument_name_convertor'] : $this->getFrameworkExtraBundle_ArgumentNameConvertorService()) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'locale_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\LocaleListener
     */
    protected function getLocaleListenerService()
    {
        return $this->services['locale_listener'] = new \Symfony\Component\HttpKernel\EventListener\LocaleListener(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, 'en', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'});
    }

    /**
     * Gets the private 'logger' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getLoggerService()
    {
        $this->services['logger'] = $instance = new \Symfony\Bridge\Monolog\Logger('app');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->useMicrosecondTimestamps(true);
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true)) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.console' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ConsoleHandler
     */
    protected function getMonolog_Handler_ConsoleService()
    {
        return $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array());
    }

    /**
     * Gets the private 'monolog.handler.main' shared service.
     *
     * @return \Monolog\Handler\StreamHandler
     */
    protected function getMonolog_Handler_MainService()
    {
        $this->services['monolog.handler.main'] = $instance = new \Monolog\Handler\StreamHandler(($this->targetDirs[2].'/logs/dev.log'), 100, true, NULL);

        $instance->pushProcessor(new \Monolog\Processor\PsrLogMessageProcessor());

        return $instance;
    }

    /**
     * Gets the private 'monolog.handler.server_log' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Handler\ServerLogHandler
     */
    protected function getMonolog_Handler_ServerLogService()
    {
        return $this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true);
    }

    /**
     * Gets the private 'monolog.logger.cache' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_CacheService()
    {
        $this->services['monolog.logger.cache'] = $instance = new \Symfony\Bridge\Monolog\Logger('cache');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true)) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.event' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_EventService()
    {
        $this->services['monolog.logger.event'] = $instance = new \Symfony\Bridge\Monolog\Logger('event');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true)) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.php' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_PhpService()
    {
        $this->services['monolog.logger.php'] = $instance = new \Symfony\Bridge\Monolog\Logger('php');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true)) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.profiler' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_ProfilerService()
    {
        $this->services['monolog.logger.profiler'] = $instance = new \Symfony\Bridge\Monolog\Logger('profiler');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true)) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'monolog.logger.request' shared service.
     *
     * @return \Symfony\Bridge\Monolog\Logger
     */
    protected function getMonolog_Logger_RequestService()
    {
        $this->services['monolog.logger.request'] = $instance = new \Symfony\Bridge\Monolog\Logger('request');

        $instance->pushProcessor(${($_ = isset($this->services['debug.log_processor']) ? $this->services['debug.log_processor'] : $this->services['debug.log_processor'] = new \Symfony\Bridge\Monolog\Processor\DebugProcessor()) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.server_log']) ? $this->services['monolog.handler.server_log'] : $this->services['monolog.handler.server_log'] = new \Symfony\Bridge\Monolog\Handler\ServerLogHandler('127.0.0.1:9911', 100, true)) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.console']) ? $this->services['monolog.handler.console'] : $this->services['monolog.handler.console'] = new \Symfony\Bridge\Monolog\Handler\ConsoleHandler(NULL, true, array())) && false ?: '_'});
        $instance->pushHandler(${($_ = isset($this->services['monolog.handler.main']) ? $this->services['monolog.handler.main'] : $this->getMonolog_Handler_MainService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'profiler_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ProfilerListener
     */
    protected function getProfilerListenerService()
    {
        return $this->services['profiler_listener'] = new \Symfony\Component\HttpKernel\EventListener\ProfilerListener(${($_ = isset($this->services['profiler']) ? $this->services['profiler'] : $this->getProfilerService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, NULL, false, false);
    }

    /**
     * Gets the private 'property_accessor' shared service.
     *
     * @return \Symfony\Component\PropertyAccess\PropertyAccessor
     */
    protected function getPropertyAccessorService()
    {
        return $this->services['property_accessor'] = new \Symfony\Component\PropertyAccess\PropertyAccessor(false, false, new \Symfony\Component\Cache\Adapter\ArrayAdapter(0, false));
    }

    /**
     * Gets the private 'property_info' shared service.
     *
     * @return \Symfony\Component\PropertyInfo\PropertyInfoExtractor
     */
    protected function getPropertyInfoService()
    {
        return $this->services['property_info'] = new \Symfony\Component\PropertyInfo\PropertyInfoExtractor(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['property_info.serializer_extractor']) ? $this->services['property_info.serializer_extractor'] : $this->load(__DIR__.'/getPropertyInfo_SerializerExtractorService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['property_info.reflection_extractor']) ? $this->services['property_info.reflection_extractor'] : $this->services['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()) && false ?: '_'};
            yield 2 => ${($_ = isset($this->services['doctrine.orm.default_entity_manager.property_info_extractor']) ? $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] : $this->load(__DIR__.'/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php')) && false ?: '_'};
        }, 3), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['doctrine.orm.default_entity_manager.property_info_extractor']) ? $this->services['doctrine.orm.default_entity_manager.property_info_extractor'] : $this->load(__DIR__.'/getDoctrine_Orm_DefaultEntityManager_PropertyInfoExtractorService.php')) && false ?: '_'};
            yield 1 => ${($_ = isset($this->services['property_info.reflection_extractor']) ? $this->services['property_info.reflection_extractor'] : $this->services['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()) && false ?: '_'};
        }, 2), new RewindableGenerator(function () {
            return new \EmptyIterator();
        }, 0), new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['property_info.reflection_extractor']) ? $this->services['property_info.reflection_extractor'] : $this->services['property_info.reflection_extractor'] = new \Symfony\Component\PropertyInfo\Extractor\ReflectionExtractor()) && false ?: '_'};
        }, 1));
    }

    /**
     * Gets the private 'resolve_controller_name_subscriber' shared service.
     *
     * @return \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber
     */
    protected function getResolveControllerNameSubscriberService()
    {
        return $this->services['resolve_controller_name_subscriber'] = new \Symfony\Bundle\FrameworkBundle\EventListener\ResolveControllerNameSubscriber(${($_ = isset($this->services['controller_name_converter']) ? $this->services['controller_name_converter'] : $this->services['controller_name_converter'] = new \Symfony\Bundle\FrameworkBundle\Controller\ControllerNameParser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'})) && false ?: '_'});
    }

    /**
     * Gets the private 'response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ResponseListener
     */
    protected function getResponseListenerService()
    {
        return $this->services['response_listener'] = new \Symfony\Component\HttpKernel\EventListener\ResponseListener('UTF-8');
    }

    /**
     * Gets the private 'router.request_context' shared service.
     *
     * @return \Symfony\Component\Routing\RequestContext
     */
    protected function getRouter_RequestContextService()
    {
        return $this->services['router.request_context'] = new \Symfony\Component\Routing\RequestContext('', 'GET', 'localhost', 'http', 80, 443);
    }

    /**
     * Gets the private 'router_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\RouterListener
     */
    protected function getRouterListenerService()
    {
        return $this->services['router_listener'] = new \Symfony\Component\HttpKernel\EventListener\RouterListener(${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['router.request_context']) ? $this->services['router.request_context'] : $this->getRouter_RequestContextService()) && false ?: '_'}, ${($_ = isset($this->services['monolog.logger.request']) ? $this->services['monolog.logger.request'] : $this->getMonolog_Logger_RequestService()) && false ?: '_'}, $this->targetDirs[3], true);
    }

    /**
     * Gets the private 'security.authentication.manager' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager
     */
    protected function getSecurity_Authentication_ManagerService()
    {
        $this->services['security.authentication.manager'] = $instance = new \Symfony\Component\Security\Core\Authentication\AuthenticationProviderManager(new RewindableGenerator(function () {
            yield 0 => ${($_ = isset($this->services['security.authentication.provider.anonymous.main']) ? $this->services['security.authentication.provider.anonymous.main'] : $this->services['security.authentication.provider.anonymous.main'] = new \Symfony\Component\Security\Core\Authentication\Provider\AnonymousAuthenticationProvider($this->getParameter('container.build_hash'))) && false ?: '_'};
        }, 1), true);

        $instance->setEventDispatcher(${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'});

        return $instance;
    }

    /**
     * Gets the private 'security.authentication.trust_resolver' shared service.
     *
     * @return \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver
     */
    protected function getSecurity_Authentication_TrustResolverService()
    {
        return $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken');
    }

    /**
     * Gets the private 'security.firewall' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener
     */
    protected function getSecurity_FirewallService()
    {
        return $this->services['security.firewall'] = new \Symfony\Bundle\SecurityBundle\Debug\TraceableFirewallListener(${($_ = isset($this->services['security.firewall.map']) ? $this->services['security.firewall.map'] : $this->getSecurity_Firewall_MapService()) && false ?: '_'}, ${($_ = isset($this->services['debug.event_dispatcher']) ? $this->services['debug.event_dispatcher'] : $this->getDebug_EventDispatcherService()) && false ?: '_'}, ${($_ = isset($this->services['security.logout_url_generator']) ? $this->services['security.logout_url_generator'] : $this->getSecurity_LogoutUrlGeneratorService()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.firewall.map' shared service.
     *
     * @return \Symfony\Bundle\SecurityBundle\Security\FirewallMap
     */
    protected function getSecurity_Firewall_MapService()
    {
        return $this->services['security.firewall.map'] = new \Symfony\Bundle\SecurityBundle\Security\FirewallMap(new \Symfony\Component\DependencyInjection\ServiceLocator(array('security.firewall.map.context.dev' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.dev']) ? $this->services['security.firewall.map.context.dev'] : $this->load(__DIR__.'/getSecurity_Firewall_Map_Context_DevService.php')) && false ?: '_'};
        }, 'security.firewall.map.context.main' => function () {
            return ${($_ = isset($this->services['security.firewall.map.context.main']) ? $this->services['security.firewall.map.context.main'] : $this->load(__DIR__.'/getSecurity_Firewall_Map_Context_MainService.php')) && false ?: '_'};
        })), new RewindableGenerator(function () {
            yield 'security.firewall.map.context.dev' => ${($_ = isset($this->services['security.request_matcher.zfhj2lw']) ? $this->services['security.request_matcher.zfhj2lw'] : $this->services['security.request_matcher.zfhj2lw'] = new \Symfony\Component\HttpFoundation\RequestMatcher('^/(_(profiler|wdt)|css|images|js)/')) && false ?: '_'};
            yield 'security.firewall.map.context.main' => NULL;
        }, 2));
    }

    /**
     * Gets the private 'security.logout_url_generator' shared service.
     *
     * @return \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator
     */
    protected function getSecurity_LogoutUrlGeneratorService()
    {
        return $this->services['security.logout_url_generator'] = new \Symfony\Component\Security\Http\Logout\LogoutUrlGenerator(${($_ = isset($this->services['request_stack']) ? $this->services['request_stack'] : $this->services['request_stack'] = new \Symfony\Component\HttpFoundation\RequestStack()) && false ?: '_'}, ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'});
    }

    /**
     * Gets the private 'security.rememberme.response_listener' shared service.
     *
     * @return \Symfony\Component\Security\Http\RememberMe\ResponseListener
     */
    protected function getSecurity_Rememberme_ResponseListenerService()
    {
        return $this->services['security.rememberme.response_listener'] = new \Symfony\Component\Security\Http\RememberMe\ResponseListener();
    }

    /**
     * Gets the private 'security.role_hierarchy' shared service.
     *
     * @return \Symfony\Component\Security\Core\Role\RoleHierarchy
     */
    protected function getSecurity_RoleHierarchyService()
    {
        return $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array());
    }

    /**
     * Gets the private 'sensio_framework_extra.cache.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener
     */
    protected function getSensioFrameworkExtra_Cache_ListenerService()
    {
        return $this->services['sensio_framework_extra.cache.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\HttpCacheListener();
    }

    /**
     * Gets the private 'sensio_framework_extra.controller.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener
     */
    protected function getSensioFrameworkExtra_Controller_ListenerService()
    {
        return $this->services['sensio_framework_extra.controller.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ControllerListener(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener
     */
    protected function getSensioFrameworkExtra_Converter_ListenerService()
    {
        return $this->services['sensio_framework_extra.converter.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\ParamConverterListener(${($_ = isset($this->services['sensio_framework_extra.converter.manager']) ? $this->services['sensio_framework_extra.converter.manager'] : $this->getSensioFrameworkExtra_Converter_ManagerService()) && false ?: '_'}, true);
    }

    /**
     * Gets the private 'sensio_framework_extra.converter.manager' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager
     */
    protected function getSensioFrameworkExtra_Converter_ManagerService()
    {
        $this->services['sensio_framework_extra.converter.manager'] = $instance = new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\ParamConverterManager();

        $instance->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DoctrineParamConverter(${($_ = isset($this->services['doctrine']) ? $this->services['doctrine'] : $this->getDoctrineService()) && false ?: '_'}, new \Symfony\Component\ExpressionLanguage\ExpressionLanguage()), 0, 'doctrine.orm');
        $instance->add(new \Sensio\Bundle\FrameworkExtraBundle\Request\ParamConverter\DateTimeParamConverter(), 0, 'datetime');

        return $instance;
    }

    /**
     * Gets the private 'sensio_framework_extra.security.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener
     */
    protected function getSensioFrameworkExtra_Security_ListenerService()
    {
        return $this->services['sensio_framework_extra.security.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\SecurityListener(${($_ = isset($this->services['framework_extra_bundle.argument_name_convertor']) ? $this->services['framework_extra_bundle.argument_name_convertor'] : $this->getFrameworkExtraBundle_ArgumentNameConvertorService()) && false ?: '_'}, new \Sensio\Bundle\FrameworkExtraBundle\Security\ExpressionLanguage(), ${($_ = isset($this->services['security.authentication.trust_resolver']) ? $this->services['security.authentication.trust_resolver'] : $this->services['security.authentication.trust_resolver'] = new \Symfony\Component\Security\Core\Authentication\AuthenticationTrustResolver('Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken', 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken')) && false ?: '_'}, ${($_ = isset($this->services['security.role_hierarchy']) ? $this->services['security.role_hierarchy'] : $this->services['security.role_hierarchy'] = new \Symfony\Component\Security\Core\Role\RoleHierarchy(array())) && false ?: '_'}, ${($_ = isset($this->services['security.token_storage']) ? $this->services['security.token_storage'] : $this->services['security.token_storage'] = new \Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorage()) && false ?: '_'}, ${($_ = isset($this->services['security.authorization_checker']) ? $this->services['security.authorization_checker'] : $this->getSecurity_AuthorizationCheckerService()) && false ?: '_'}, ${($_ = isset($this->services['logger']) ? $this->services['logger'] : $this->getLoggerService()) && false ?: '_'});
    }

    /**
     * Gets the private 'sensio_framework_extra.view.listener' shared service.
     *
     * @return \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener
     */
    protected function getSensioFrameworkExtra_View_ListenerService()
    {
        return $this->services['sensio_framework_extra.view.listener'] = new \Sensio\Bundle\FrameworkExtraBundle\EventListener\TemplateListener(new \Sensio\Bundle\FrameworkExtraBundle\Templating\TemplateGuesser(${($_ = isset($this->services['kernel']) ? $this->services['kernel'] : $this->get('kernel')) && false ?: '_'}), ${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'});
    }

    /**
     * Gets the private 'serializer.mapping.class_metadata_factory' shared service.
     *
     * @return \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory
     */
    protected function getSerializer_Mapping_ClassMetadataFactoryService()
    {
        return $this->services['serializer.mapping.class_metadata_factory'] = new \Symfony\Component\Serializer\Mapping\Factory\ClassMetadataFactory(new \Symfony\Component\Serializer\Mapping\Loader\LoaderChain(array()), NULL);
    }

    /**
     * Gets the private 'session.save_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SaveSessionListener
     */
    protected function getSession_SaveListenerService()
    {
        return $this->services['session.save_listener'] = new \Symfony\Component\HttpKernel\EventListener\SaveSessionListener();
    }

    /**
     * Gets the private 'session_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\SessionListener
     */
    protected function getSessionListenerService()
    {
        return $this->services['session_listener'] = new \Symfony\Component\HttpKernel\EventListener\SessionListener(new \Symfony\Component\DependencyInjection\ServiceLocator(array('session' => function () {
            return ${($_ = isset($this->services['session']) ? $this->services['session'] : $this->load(__DIR__.'/getSessionService.php')) && false ?: '_'};
        })));
    }

    /**
     * Gets the private 'streamed_response_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener
     */
    protected function getStreamedResponseListenerService()
    {
        return $this->services['streamed_response_listener'] = new \Symfony\Component\HttpKernel\EventListener\StreamedResponseListener();
    }

    /**
     * Gets the private 'twig.loader' shared service.
     *
     * @return \Twig\Loader\FilesystemLoader
     */
    protected function getTwig_LoaderService()
    {
        $this->services['twig.loader'] = $instance = new \Twig\Loader\FilesystemLoader(array(), $this->targetDirs[3]);

        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), 'Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views'), '!Framework');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), 'Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle/Resources/views'), '!Security');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), 'Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle/Resources/views'), '!Twig');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), 'Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle/Resources/views'), '!Swiftmailer');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), 'Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle/Resources/views'), '!Doctrine');
        $instance->addPath(($this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views'), 'ApiPlatform');
        $instance->addPath(($this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle/Resources/views'), '!ApiPlatform');
        $instance->addPath(($this->targetDirs[3].'/src/AppBundle/Resources/views'), 'App');
        $instance->addPath(($this->targetDirs[3].'/src/AppBundle/Resources/views'), '!App');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), 'Debug');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle/Resources/views'), '!Debug');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), 'WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle/Resources/views'), '!WebProfiler');
        $instance->addPath(($this->targetDirs[3].'/app/Resources/views'));
        $instance->addPath(($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bridge/Twig/Resources/views/Form'));

        return $instance;
    }

    /**
     * Gets the private 'twig.profile' shared service.
     *
     * @return \Twig\Profiler\Profile
     */
    protected function getTwig_ProfileService()
    {
        return $this->services['twig.profile'] = new \Twig\Profiler\Profile();
    }

    /**
     * Gets the private 'uri_signer' shared service.
     *
     * @return \Symfony\Component\HttpKernel\UriSigner
     */
    protected function getUriSignerService()
    {
        return $this->services['uri_signer'] = new \Symfony\Component\HttpKernel\UriSigner('ThisTokenIsNotSoSecretChangeIt');
    }

    /**
     * Gets the private 'validate_request_listener' shared service.
     *
     * @return \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener
     */
    protected function getValidateRequestListenerService()
    {
        return $this->services['validate_request_listener'] = new \Symfony\Component\HttpKernel\EventListener\ValidateRequestListener();
    }

    /**
     * Gets the private 'validator.builder' shared service.
     *
     * @return \Symfony\Component\Validator\ValidatorBuilderInterface
     */
    protected function getValidator_BuilderService()
    {
        $this->services['validator.builder'] = $instance = \Symfony\Component\Validator\Validation::createValidatorBuilder();

        $instance->setConstraintValidatorFactory(new \Symfony\Component\Validator\ContainerConstraintValidatorFactory(new \Symfony\Component\DependencyInjection\ServiceLocator(array('Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->load(__DIR__.'/getDoctrine_Orm_Validator_UniqueService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Security\\Core\\Validator\\Constraints\\UserPasswordValidator' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->load(__DIR__.'/getSecurity_Validator_UserPasswordService.php')) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\EmailValidator' => function () {
            return ${($_ = isset($this->services['validator.email']) ? $this->services['validator.email'] : $this->services['validator.email'] = new \Symfony\Component\Validator\Constraints\EmailValidator(false)) && false ?: '_'};
        }, 'Symfony\\Component\\Validator\\Constraints\\ExpressionValidator' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator()) && false ?: '_'};
        }, 'doctrine.orm.validator.unique' => function () {
            return ${($_ = isset($this->services['doctrine.orm.validator.unique']) ? $this->services['doctrine.orm.validator.unique'] : $this->load(__DIR__.'/getDoctrine_Orm_Validator_UniqueService.php')) && false ?: '_'};
        }, 'security.validator.user_password' => function () {
            return ${($_ = isset($this->services['security.validator.user_password']) ? $this->services['security.validator.user_password'] : $this->load(__DIR__.'/getSecurity_Validator_UserPasswordService.php')) && false ?: '_'};
        }, 'validator.expression' => function () {
            return ${($_ = isset($this->services['validator.expression']) ? $this->services['validator.expression'] : $this->services['validator.expression'] = new \Symfony\Component\Validator\Constraints\ExpressionValidator()) && false ?: '_'};
        }))));
        $instance->setTranslator(${($_ = isset($this->services['translator']) ? $this->services['translator'] : $this->getTranslatorService()) && false ?: '_'});
        $instance->setTranslationDomain('validators');
        $instance->addXmlMappings(array(0 => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Component/Form/Resources/config/validation.xml')));
        $instance->enableAnnotationMapping(${($_ = isset($this->services['annotation_reader']) ? $this->services['annotation_reader'] : $this->getAnnotationReaderService()) && false ?: '_'});
        $instance->addMethodMapping('loadValidatorMetadata');
        $instance->addObjectInitializers(array(0 => ${($_ = isset($this->services['doctrine.orm.validator_initializer']) ? $this->services['doctrine.orm.validator_initializer'] : $this->getDoctrine_Orm_ValidatorInitializerService()) && false ?: '_'}));

        return $instance;
    }

    /**
     * Gets the private 'web_profiler.csp.handler' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler
     */
    protected function getWebProfiler_Csp_HandlerService()
    {
        return $this->services['web_profiler.csp.handler'] = new \Symfony\Bundle\WebProfilerBundle\Csp\ContentSecurityPolicyHandler(new \Symfony\Bundle\WebProfilerBundle\Csp\NonceGenerator());
    }

    /**
     * Gets the private 'web_profiler.debug_toolbar' shared service.
     *
     * @return \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener
     */
    protected function getWebProfiler_DebugToolbarService()
    {
        return $this->services['web_profiler.debug_toolbar'] = new \Symfony\Bundle\WebProfilerBundle\EventListener\WebDebugToolbarListener(${($_ = isset($this->services['twig']) ? $this->services['twig'] : $this->getTwigService()) && false ?: '_'}, false, 2, 'bottom', ${($_ = isset($this->services['router']) ? $this->services['router'] : $this->getRouterService()) && false ?: '_'}, '^/(app(_[\\w]+)?\\.php/)?_wdt', ${($_ = isset($this->services['web_profiler.csp.handler']) ? $this->services['web_profiler.csp.handler'] : $this->getWebProfiler_Csp_HandlerService()) && false ?: '_'});
    }

    public function getParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return $this->buildParameters[$name];
        }
        if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
            $name = $this->normalizeParameterName($name);

            if (!(isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters))) {
                throw new InvalidArgumentException(sprintf('The parameter "%s" must be defined.', $name));
            }
        }
        if (isset($this->loadedDynamicParameters[$name])) {
            return $this->loadedDynamicParameters[$name] ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
        }

        return $this->parameters[$name];
    }

    public function hasParameter($name)
    {
        $name = (string) $name;
        if (isset($this->buildParameters[$name])) {
            return true;
        }
        $name = $this->normalizeParameterName($name);

        return isset($this->parameters[$name]) || isset($this->loadedDynamicParameters[$name]) || array_key_exists($name, $this->parameters);
    }

    public function setParameter($name, $value)
    {
        throw new LogicException('Impossible to call set() on a frozen ParameterBag.');
    }

    public function getParameterBag()
    {
        if (null === $this->parameterBag) {
            $parameters = $this->parameters;
            foreach ($this->loadedDynamicParameters as $name => $loaded) {
                $parameters[$name] = $loaded ? $this->dynamicParameters[$name] : $this->getDynamicParameter($name);
            }
            foreach ($this->buildParameters as $name => $value) {
                $parameters[$name] = $value;
            }
            $this->parameterBag = new FrozenParameterBag($parameters);
        }

        return $this->parameterBag;
    }

    private $loadedDynamicParameters = array(
        'kernel.root_dir' => false,
        'kernel.project_dir' => false,
        'kernel.cache_dir' => false,
        'kernel.logs_dir' => false,
        'kernel.bundles_metadata' => false,
        'session.save_path' => false,
        'validator.mapping.cache.file' => false,
        'profiler.storage.dsn' => false,
        'debug.container.dump' => false,
        'router.resource' => false,
        'serializer.mapping.cache.file' => false,
        'twig.default_path' => false,
        'swiftmailer.spool.default.memory.path' => false,
        'doctrine.orm.proxy_dir' => false,
        'api_platform.resource_class_directories' => false,
    );
    private $dynamicParameters = array();

    /**
     * Computes a dynamic parameter.
     *
     * @param string The name of the dynamic parameter to load
     *
     * @return mixed The value of the dynamic parameter
     *
     * @throws InvalidArgumentException When the dynamic parameter does not exist
     */
    private function getDynamicParameter($name)
    {
        switch ($name) {
            case 'kernel.root_dir': $value = ($this->targetDirs[3].'/app'); break;
            case 'kernel.project_dir': $value = $this->targetDirs[3]; break;
            case 'kernel.cache_dir': $value = $this->targetDirs[0]; break;
            case 'kernel.logs_dir': $value = ($this->targetDirs[2].'/logs'); break;
            case 'kernel.bundles_metadata': $value = array(
                'FrameworkBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle'),
                    'namespace' => 'Symfony\\Bundle\\FrameworkBundle',
                ),
                'SecurityBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/SecurityBundle'),
                    'namespace' => 'Symfony\\Bundle\\SecurityBundle',
                ),
                'TwigBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/TwigBundle'),
                    'namespace' => 'Symfony\\Bundle\\TwigBundle',
                ),
                'MonologBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/monolog-bundle'),
                    'namespace' => 'Symfony\\Bundle\\MonologBundle',
                ),
                'SwiftmailerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/swiftmailer-bundle'),
                    'namespace' => 'Symfony\\Bundle\\SwiftmailerBundle',
                ),
                'DoctrineBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/doctrine/doctrine-bundle'),
                    'namespace' => 'Doctrine\\Bundle\\DoctrineBundle',
                ),
                'SensioFrameworkExtraBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/framework-extra-bundle'),
                    'namespace' => 'Sensio\\Bundle\\FrameworkExtraBundle',
                ),
                'ApiPlatformBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/api-platform/core/src/Bridge/Symfony/Bundle'),
                    'namespace' => 'ApiPlatform\\Core\\Bridge\\Symfony\\Bundle',
                ),
                'AppBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/src/AppBundle'),
                    'namespace' => 'AppBundle',
                ),
                'DebugBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/DebugBundle'),
                    'namespace' => 'Symfony\\Bundle\\DebugBundle',
                ),
                'WebProfilerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebProfilerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebProfilerBundle',
                ),
                'SensioDistributionBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/distribution-bundle'),
                    'namespace' => 'Sensio\\Bundle\\DistributionBundle',
                ),
                'SensioGeneratorBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/sensio/generator-bundle'),
                    'namespace' => 'Sensio\\Bundle\\GeneratorBundle',
                ),
                'WebServerBundle' => array(
                    'parent' => NULL,
                    'path' => ($this->targetDirs[3].'/vendor/symfony/symfony/src/Symfony/Bundle/WebServerBundle'),
                    'namespace' => 'Symfony\\Bundle\\WebServerBundle',
                ),
            ); break;
            case 'session.save_path': $value = ($this->targetDirs[2].'/sessions/dev'); break;
            case 'validator.mapping.cache.file': $value = ($this->targetDirs[0].'/validation.php'); break;
            case 'profiler.storage.dsn': $value = ('file:'.$this->targetDirs[0].'/profiler'); break;
            case 'debug.container.dump': $value = ($this->targetDirs[0].'/appDevDebugProjectContainer.xml'); break;
            case 'router.resource': $value = ($this->targetDirs[3].'/app/config/routing_dev.yml'); break;
            case 'serializer.mapping.cache.file': $value = ($this->targetDirs[0].'/serialization.php'); break;
            case 'twig.default_path': $value = ($this->targetDirs[3].'/templates'); break;
            case 'swiftmailer.spool.default.memory.path': $value = ($this->targetDirs[0].'/swiftmailer/spool/default'); break;
            case 'doctrine.orm.proxy_dir': $value = ($this->targetDirs[0].'/doctrine/orm/Proxies'); break;
            case 'api_platform.resource_class_directories': $value = array(
                0 => ($this->targetDirs[3].'/src/AppBundle/Entity'),
            ); break;
            default: throw new InvalidArgumentException(sprintf('The dynamic parameter "%s" must be defined.', $name));
        }
        $this->loadedDynamicParameters[$name] = true;

        return $this->dynamicParameters[$name] = $value;
    }

    private $normalizedParameterNames = array(
        'api_platform.oauth.clientid' => 'api_platform.oauth.clientId',
        'api_platform.oauth.clientsecret' => 'api_platform.oauth.clientSecret',
        'api_platform.oauth.tokenurl' => 'api_platform.oauth.tokenUrl',
        'api_platform.oauth.authorizationurl' => 'api_platform.oauth.authorizationUrl',
    );

    private function normalizeParameterName($name)
    {
        if (isset($this->normalizedParameterNames[$normalizedName = strtolower($name)]) || isset($this->parameters[$normalizedName]) || array_key_exists($normalizedName, $this->parameters)) {
            $normalizedName = isset($this->normalizedParameterNames[$normalizedName]) ? $this->normalizedParameterNames[$normalizedName] : $normalizedName;
            if ((string) $name !== $normalizedName) {
                @trigger_error(sprintf('Parameter names will be made case sensitive in Symfony 4.0. Using "%s" instead of "%s" is deprecated since Symfony 3.4.', $name, $normalizedName), E_USER_DEPRECATED);
            }
        } else {
            $normalizedName = $this->normalizedParameterNames[$normalizedName] = (string) $name;
        }

        return $normalizedName;
    }

    /**
     * Gets the default parameters.
     *
     * @return array An array of the default parameters
     */
    protected function getDefaultParameters()
    {
        return array(
            'kernel.environment' => 'dev',
            'kernel.debug' => true,
            'kernel.name' => 'app',
            'kernel.bundles' => array(
                'FrameworkBundle' => 'Symfony\\Bundle\\FrameworkBundle\\FrameworkBundle',
                'SecurityBundle' => 'Symfony\\Bundle\\SecurityBundle\\SecurityBundle',
                'TwigBundle' => 'Symfony\\Bundle\\TwigBundle\\TwigBundle',
                'MonologBundle' => 'Symfony\\Bundle\\MonologBundle\\MonologBundle',
                'SwiftmailerBundle' => 'Symfony\\Bundle\\SwiftmailerBundle\\SwiftmailerBundle',
                'DoctrineBundle' => 'Doctrine\\Bundle\\DoctrineBundle\\DoctrineBundle',
                'SensioFrameworkExtraBundle' => 'Sensio\\Bundle\\FrameworkExtraBundle\\SensioFrameworkExtraBundle',
                'ApiPlatformBundle' => 'ApiPlatform\\Core\\Bridge\\Symfony\\Bundle\\ApiPlatformBundle',
                'AppBundle' => 'AppBundle\\AppBundle',
                'DebugBundle' => 'Symfony\\Bundle\\DebugBundle\\DebugBundle',
                'WebProfilerBundle' => 'Symfony\\Bundle\\WebProfilerBundle\\WebProfilerBundle',
                'SensioDistributionBundle' => 'Sensio\\Bundle\\DistributionBundle\\SensioDistributionBundle',
                'SensioGeneratorBundle' => 'Sensio\\Bundle\\GeneratorBundle\\SensioGeneratorBundle',
                'WebServerBundle' => 'Symfony\\Bundle\\WebServerBundle\\WebServerBundle',
            ),
            'kernel.charset' => 'UTF-8',
            'kernel.container_class' => 'appDevDebugProjectContainer',
            'container.autowiring.strict_mode' => true,
            'container.dumper.inline_class_loader' => true,
            'database_host' => '127.0.0.1',
            'database_port' => NULL,
            'database_name' => 'symfony',
            'database_user' => 'aurelien2105',
            'database_password' => NULL,
            'mailer_transport' => 'smtp',
            'mailer_host' => '127.0.0.1',
            'mailer_user' => NULL,
            'mailer_password' => NULL,
            'secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'locale' => 'en',
            'fragment.renderer.hinclude.global_template' => '',
            'fragment.path' => '/_fragment',
            'kernel.secret' => 'ThisTokenIsNotSoSecretChangeIt',
            'kernel.http_method_override' => true,
            'kernel.trusted_hosts' => array(

            ),
            'kernel.default_locale' => 'en',
            'templating.helper.code.file_link_format' => NULL,
            'debug.file_link_format' => NULL,
            'session.metadata.storage_key' => '_sf2_meta',
            'session.storage.options' => array(
                'cache_limiter' => '0',
                'cookie_httponly' => true,
                'gc_probability' => 1,
                'use_strict_mode' => true,
            ),
            'session.metadata.update_threshold' => '0',
            'form.type_extension.csrf.enabled' => true,
            'form.type_extension.csrf.field_name' => '_token',
            'asset.request_context.base_path' => '',
            'asset.request_context.secure' => false,
            'validator.mapping.cache.prefix' => '',
            'validator.translation_domain' => 'validators',
            'profiler_listener.only_exceptions' => false,
            'profiler_listener.only_master_requests' => false,
            'debug.error_handler.throw_at' => -1,
            'router.options.generator_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_base_class' => 'Symfony\\Component\\Routing\\Generator\\UrlGenerator',
            'router.options.generator_dumper_class' => 'Symfony\\Component\\Routing\\Generator\\Dumper\\PhpGeneratorDumper',
            'router.options.matcher_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_base_class' => 'Symfony\\Bundle\\FrameworkBundle\\Routing\\RedirectableUrlMatcher',
            'router.options.matcher_dumper_class' => 'Symfony\\Component\\Routing\\Matcher\\Dumper\\PhpMatcherDumper',
            'router.options.matcher.cache_class' => 'appDevDebugProjectContainerUrlMatcher',
            'router.options.generator.cache_class' => 'appDevDebugProjectContainerUrlGenerator',
            'router.request_context.host' => 'localhost',
            'router.request_context.scheme' => 'http',
            'router.request_context.base_url' => '',
            'router.cache_class_prefix' => 'appDevDebugProjectContainer',
            'request_listener.http_port' => 80,
            'request_listener.https_port' => 443,
            'serializer.mapping.cache.prefix' => '',
            'security.authentication.trust_resolver.anonymous_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\AnonymousToken',
            'security.authentication.trust_resolver.rememberme_class' => 'Symfony\\Component\\Security\\Core\\Authentication\\Token\\RememberMeToken',
            'security.role_hierarchy.roles' => array(

            ),
            'security.access.denied_url' => NULL,
            'security.authentication.manager.erase_credentials' => true,
            'security.authentication.session_strategy.strategy' => 'migrate',
            'security.access.always_authenticate_before_granting' => false,
            'security.authentication.hide_user_not_found' => true,
            'twig.exception_listener.controller' => 'twig.controller.exception:showAction',
            'twig.form.resources' => array(
                0 => 'form_div_layout.html.twig',
            ),
            'monolog.use_microseconds' => true,
            'monolog.swift_mailer.handlers' => array(

            ),
            'monolog.handlers_to_channels' => array(
                'monolog.handler.server_log' => NULL,
                'monolog.handler.console' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                        1 => 'doctrine',
                        2 => 'console',
                    ),
                ),
                'monolog.handler.main' => array(
                    'type' => 'exclusive',
                    'elements' => array(
                        0 => 'event',
                    ),
                ),
            ),
            'swiftmailer.class' => 'Swift_Mailer',
            'swiftmailer.transport.sendmail.class' => 'Swift_Transport_SendmailTransport',
            'swiftmailer.transport.mail.class' => 'Swift_Transport_MailTransport',
            'swiftmailer.transport.failover.class' => 'Swift_Transport_FailoverTransport',
            'swiftmailer.plugin.redirecting.class' => 'Swift_Plugins_RedirectingPlugin',
            'swiftmailer.plugin.impersonate.class' => 'Swift_Plugins_ImpersonatePlugin',
            'swiftmailer.plugin.messagelogger.class' => 'Swift_Plugins_MessageLogger',
            'swiftmailer.plugin.antiflood.class' => 'Swift_Plugins_AntiFloodPlugin',
            'swiftmailer.transport.smtp.class' => 'Swift_Transport_EsmtpTransport',
            'swiftmailer.plugin.blackhole.class' => 'Swift_Plugins_BlackholePlugin',
            'swiftmailer.spool.file.class' => 'Swift_FileSpool',
            'swiftmailer.spool.memory.class' => 'Swift_MemorySpool',
            'swiftmailer.email_sender.listener.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\EventListener\\EmailSenderListener',
            'swiftmailer.data_collector.class' => 'Symfony\\Bundle\\SwiftmailerBundle\\DataCollector\\MessageDataCollector',
            'swiftmailer.mailer.default.transport.name' => 'smtp',
            'swiftmailer.mailer.default.transport.smtp.encryption' => NULL,
            'swiftmailer.mailer.default.transport.smtp.port' => 25,
            'swiftmailer.mailer.default.transport.smtp.host' => '127.0.0.1',
            'swiftmailer.mailer.default.transport.smtp.username' => NULL,
            'swiftmailer.mailer.default.transport.smtp.password' => NULL,
            'swiftmailer.mailer.default.transport.smtp.auth_mode' => NULL,
            'swiftmailer.mailer.default.transport.smtp.timeout' => 30,
            'swiftmailer.mailer.default.transport.smtp.source_ip' => NULL,
            'swiftmailer.mailer.default.transport.smtp.local_domain' => NULL,
            'swiftmailer.mailer.default.spool.enabled' => true,
            'swiftmailer.mailer.default.plugin.impersonate' => NULL,
            'swiftmailer.mailer.default.single_address' => NULL,
            'swiftmailer.mailer.default.delivery.enabled' => true,
            'swiftmailer.spool.enabled' => true,
            'swiftmailer.delivery.enabled' => true,
            'swiftmailer.single_address' => NULL,
            'swiftmailer.mailers' => array(
                'default' => 'swiftmailer.mailer.default',
            ),
            'swiftmailer.default_mailer' => 'default',
            'doctrine_cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine_cache.apcu.class' => 'Doctrine\\Common\\Cache\\ApcuCache',
            'doctrine_cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine_cache.chain.class' => 'Doctrine\\Common\\Cache\\ChainCache',
            'doctrine_cache.couchbase.class' => 'Doctrine\\Common\\Cache\\CouchbaseCache',
            'doctrine_cache.couchbase.connection.class' => 'Couchbase',
            'doctrine_cache.couchbase.hostnames' => 'localhost:8091',
            'doctrine_cache.file_system.class' => 'Doctrine\\Common\\Cache\\FilesystemCache',
            'doctrine_cache.php_file.class' => 'Doctrine\\Common\\Cache\\PhpFileCache',
            'doctrine_cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine_cache.memcache.connection.class' => 'Memcache',
            'doctrine_cache.memcache.host' => 'localhost',
            'doctrine_cache.memcache.port' => 11211,
            'doctrine_cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine_cache.memcached.connection.class' => 'Memcached',
            'doctrine_cache.memcached.host' => 'localhost',
            'doctrine_cache.memcached.port' => 11211,
            'doctrine_cache.mongodb.class' => 'Doctrine\\Common\\Cache\\MongoDBCache',
            'doctrine_cache.mongodb.collection.class' => 'MongoCollection',
            'doctrine_cache.mongodb.connection.class' => 'MongoClient',
            'doctrine_cache.mongodb.server' => 'localhost:27017',
            'doctrine_cache.predis.client.class' => 'Predis\\Client',
            'doctrine_cache.predis.scheme' => 'tcp',
            'doctrine_cache.predis.host' => 'localhost',
            'doctrine_cache.predis.port' => 6379,
            'doctrine_cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine_cache.redis.connection.class' => 'Redis',
            'doctrine_cache.redis.host' => 'localhost',
            'doctrine_cache.redis.port' => 6379,
            'doctrine_cache.riak.class' => 'Doctrine\\Common\\Cache\\RiakCache',
            'doctrine_cache.riak.bucket.class' => 'Riak\\Bucket',
            'doctrine_cache.riak.connection.class' => 'Riak\\Connection',
            'doctrine_cache.riak.bucket_property_list.class' => 'Riak\\BucketPropertyList',
            'doctrine_cache.riak.host' => 'localhost',
            'doctrine_cache.riak.port' => 8087,
            'doctrine_cache.sqlite3.class' => 'Doctrine\\Common\\Cache\\SQLite3Cache',
            'doctrine_cache.sqlite3.connection.class' => 'SQLite3',
            'doctrine_cache.void.class' => 'Doctrine\\Common\\Cache\\VoidCache',
            'doctrine_cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine_cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine_cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine_cache.security.acl.cache.class' => 'Doctrine\\Bundle\\DoctrineCacheBundle\\Acl\\Model\\AclCache',
            'doctrine.dbal.logger.chain.class' => 'Doctrine\\DBAL\\Logging\\LoggerChain',
            'doctrine.dbal.logger.profiling.class' => 'Doctrine\\DBAL\\Logging\\DebugStack',
            'doctrine.dbal.logger.class' => 'Symfony\\Bridge\\Doctrine\\Logger\\DbalLogger',
            'doctrine.dbal.configuration.class' => 'Doctrine\\DBAL\\Configuration',
            'doctrine.data_collector.class' => 'Doctrine\\Bundle\\DoctrineBundle\\DataCollector\\DoctrineDataCollector',
            'doctrine.dbal.connection.event_manager.class' => 'Symfony\\Bridge\\Doctrine\\ContainerAwareEventManager',
            'doctrine.dbal.connection_factory.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ConnectionFactory',
            'doctrine.dbal.events.mysql_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\MysqlSessionInit',
            'doctrine.dbal.events.oracle_session_init.class' => 'Doctrine\\DBAL\\Event\\Listeners\\OracleSessionInit',
            'doctrine.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Registry',
            'doctrine.entity_managers' => array(
                'default' => 'doctrine.orm.default_entity_manager',
            ),
            'doctrine.default_entity_manager' => 'default',
            'doctrine.dbal.connection_factory.types' => array(

            ),
            'doctrine.connections' => array(
                'default' => 'doctrine.dbal.default_connection',
            ),
            'doctrine.default_connection' => 'default',
            'doctrine.orm.configuration.class' => 'Doctrine\\ORM\\Configuration',
            'doctrine.orm.entity_manager.class' => 'Doctrine\\ORM\\EntityManager',
            'doctrine.orm.manager_configurator.class' => 'Doctrine\\Bundle\\DoctrineBundle\\ManagerConfigurator',
            'doctrine.orm.cache.array.class' => 'Doctrine\\Common\\Cache\\ArrayCache',
            'doctrine.orm.cache.apc.class' => 'Doctrine\\Common\\Cache\\ApcCache',
            'doctrine.orm.cache.memcache.class' => 'Doctrine\\Common\\Cache\\MemcacheCache',
            'doctrine.orm.cache.memcache_host' => 'localhost',
            'doctrine.orm.cache.memcache_port' => 11211,
            'doctrine.orm.cache.memcache_instance.class' => 'Memcache',
            'doctrine.orm.cache.memcached.class' => 'Doctrine\\Common\\Cache\\MemcachedCache',
            'doctrine.orm.cache.memcached_host' => 'localhost',
            'doctrine.orm.cache.memcached_port' => 11211,
            'doctrine.orm.cache.memcached_instance.class' => 'Memcached',
            'doctrine.orm.cache.redis.class' => 'Doctrine\\Common\\Cache\\RedisCache',
            'doctrine.orm.cache.redis_host' => 'localhost',
            'doctrine.orm.cache.redis_port' => 6379,
            'doctrine.orm.cache.redis_instance.class' => 'Redis',
            'doctrine.orm.cache.xcache.class' => 'Doctrine\\Common\\Cache\\XcacheCache',
            'doctrine.orm.cache.wincache.class' => 'Doctrine\\Common\\Cache\\WinCacheCache',
            'doctrine.orm.cache.zenddata.class' => 'Doctrine\\Common\\Cache\\ZendDataCache',
            'doctrine.orm.metadata.driver_chain.class' => 'Doctrine\\Common\\Persistence\\Mapping\\Driver\\MappingDriverChain',
            'doctrine.orm.metadata.annotation.class' => 'Doctrine\\ORM\\Mapping\\Driver\\AnnotationDriver',
            'doctrine.orm.metadata.xml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedXmlDriver',
            'doctrine.orm.metadata.yml.class' => 'Doctrine\\ORM\\Mapping\\Driver\\SimplifiedYamlDriver',
            'doctrine.orm.metadata.php.class' => 'Doctrine\\ORM\\Mapping\\Driver\\PHPDriver',
            'doctrine.orm.metadata.staticphp.class' => 'Doctrine\\ORM\\Mapping\\Driver\\StaticPHPDriver',
            'doctrine.orm.proxy_cache_warmer.class' => 'Symfony\\Bridge\\Doctrine\\CacheWarmer\\ProxyCacheWarmer',
            'form.type_guesser.doctrine.class' => 'Symfony\\Bridge\\Doctrine\\Form\\DoctrineOrmTypeGuesser',
            'doctrine.orm.validator.unique.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\Constraints\\UniqueEntityValidator',
            'doctrine.orm.validator_initializer.class' => 'Symfony\\Bridge\\Doctrine\\Validator\\DoctrineInitializer',
            'doctrine.orm.security.user.provider.class' => 'Symfony\\Bridge\\Doctrine\\Security\\User\\EntityUserProvider',
            'doctrine.orm.listeners.resolve_target_entity.class' => 'Doctrine\\ORM\\Tools\\ResolveTargetEntityListener',
            'doctrine.orm.listeners.attach_entity_listeners.class' => 'Doctrine\\ORM\\Tools\\AttachEntityListenersListener',
            'doctrine.orm.naming_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultNamingStrategy',
            'doctrine.orm.naming_strategy.underscore.class' => 'Doctrine\\ORM\\Mapping\\UnderscoreNamingStrategy',
            'doctrine.orm.quote_strategy.default.class' => 'Doctrine\\ORM\\Mapping\\DefaultQuoteStrategy',
            'doctrine.orm.quote_strategy.ansi.class' => 'Doctrine\\ORM\\Mapping\\AnsiQuoteStrategy',
            'doctrine.orm.entity_listener_resolver.class' => 'Doctrine\\Bundle\\DoctrineBundle\\Mapping\\ContainerAwareEntityListenerResolver',
            'doctrine.orm.second_level_cache.default_cache_factory.class' => 'Doctrine\\ORM\\Cache\\DefaultCacheFactory',
            'doctrine.orm.second_level_cache.default_region.class' => 'Doctrine\\ORM\\Cache\\Region\\DefaultRegion',
            'doctrine.orm.second_level_cache.filelock_region.class' => 'Doctrine\\ORM\\Cache\\Region\\FileLockRegion',
            'doctrine.orm.second_level_cache.logger_chain.class' => 'Doctrine\\ORM\\Cache\\Logging\\CacheLoggerChain',
            'doctrine.orm.second_level_cache.logger_statistics.class' => 'Doctrine\\ORM\\Cache\\Logging\\StatisticsCacheLogger',
            'doctrine.orm.second_level_cache.cache_configuration.class' => 'Doctrine\\ORM\\Cache\\CacheConfiguration',
            'doctrine.orm.second_level_cache.regions_configuration.class' => 'Doctrine\\ORM\\Cache\\RegionsConfiguration',
            'doctrine.orm.auto_generate_proxy_classes' => true,
            'doctrine.orm.proxy_namespace' => 'Proxies',
            'api_platform.title' => '',
            'api_platform.description' => '',
            'api_platform.version' => '0.0.0',
            'api_platform.exception_to_status' => array(
                'Symfony\\Component\\Serializer\\Exception\\ExceptionInterface' => 400,
                'ApiPlatform\\Core\\Exception\\InvalidArgumentException' => 400,
            ),
            'api_platform.formats' => array(
                'jsonld' => array(
                    0 => 'application/ld+json',
                ),
                'json' => array(
                    0 => 'application/json',
                ),
                'html' => array(
                    0 => 'text/html',
                ),
            ),
            'api_platform.error_formats' => array(
                'jsonproblem' => array(
                    0 => 'application/problem+json',
                ),
                'jsonld' => array(
                    0 => 'application/ld+json',
                ),
            ),
            'api_platform.eager_loading.enabled' => true,
            'api_platform.eager_loading.max_joins' => 30,
            'api_platform.eager_loading.fetch_partial' => false,
            'api_platform.eager_loading.force_eager' => true,
            'api_platform.collection.order' => 'ASC',
            'api_platform.collection.order_parameter_name' => 'order',
            'api_platform.collection.pagination.enabled' => true,
            'api_platform.collection.pagination.client_enabled' => false,
            'api_platform.collection.pagination.client_items_per_page' => false,
            'api_platform.collection.pagination.items_per_page' => 30,
            'api_platform.collection.pagination.maximum_items_per_page' => NULL,
            'api_platform.collection.pagination.page_parameter_name' => 'page',
            'api_platform.collection.pagination.enabled_parameter_name' => 'pagination',
            'api_platform.collection.pagination.items_per_page_parameter_name' => 'itemsPerPage',
            'api_platform.http_cache.etag' => true,
            'api_platform.http_cache.max_age' => NULL,
            'api_platform.http_cache.shared_max_age' => NULL,
            'api_platform.http_cache.vary' => array(
                0 => 'Accept',
            ),
            'api_platform.http_cache.public' => NULL,
            'api_platform.oauth.enabled' => false,
            'api_platform.oauth.clientId' => '',
            'api_platform.oauth.clientSecret' => '',
            'api_platform.oauth.type' => 'oauth2',
            'api_platform.oauth.flow' => 'application',
            'api_platform.oauth.tokenUrl' => '/oauth/v2/token',
            'api_platform.oauth.authorizationUrl' => '/oauth/v2/auth',
            'api_platform.oauth.scopes' => array(

            ),
            'api_platform.swagger.api_keys' => array(

            ),
            'api_platform.enable_swagger_ui' => true,
            'api_platform.enable_swagger' => true,
            'web_profiler.debug_toolbar.position' => 'bottom',
            'web_profiler.debug_toolbar.intercept_redirects' => false,
            'web_profiler.debug_toolbar.mode' => 2,
            'data_collector.templates' => array(
                'data_collector.request' => array(
                    0 => 'request',
                    1 => '@WebProfiler/Collector/request.html.twig',
                ),
                'data_collector.time' => array(
                    0 => 'time',
                    1 => '@WebProfiler/Collector/time.html.twig',
                ),
                'data_collector.memory' => array(
                    0 => 'memory',
                    1 => '@WebProfiler/Collector/memory.html.twig',
                ),
                'data_collector.validator' => array(
                    0 => 'validator',
                    1 => '@WebProfiler/Collector/validator.html.twig',
                ),
                'data_collector.ajax' => array(
                    0 => 'ajax',
                    1 => '@WebProfiler/Collector/ajax.html.twig',
                ),
                'data_collector.form' => array(
                    0 => 'form',
                    1 => '@WebProfiler/Collector/form.html.twig',
                ),
                'data_collector.exception' => array(
                    0 => 'exception',
                    1 => '@WebProfiler/Collector/exception.html.twig',
                ),
                'data_collector.logger' => array(
                    0 => 'logger',
                    1 => '@WebProfiler/Collector/logger.html.twig',
                ),
                'data_collector.events' => array(
                    0 => 'events',
                    1 => '@WebProfiler/Collector/events.html.twig',
                ),
                'data_collector.router' => array(
                    0 => 'router',
                    1 => '@WebProfiler/Collector/router.html.twig',
                ),
                'data_collector.cache' => array(
                    0 => 'cache',
                    1 => '@WebProfiler/Collector/cache.html.twig',
                ),
                'data_collector.security' => array(
                    0 => 'security',
                    1 => '@Security/Collector/security.html.twig',
                ),
                'data_collector.twig' => array(
                    0 => 'twig',
                    1 => '@WebProfiler/Collector/twig.html.twig',
                ),
                'data_collector.doctrine' => array(
                    0 => 'db',
                    1 => '@Doctrine/Collector/db.html.twig',
                ),
                'swiftmailer.data_collector' => array(
                    0 => 'swiftmailer',
                    1 => '@Swiftmailer/Collector/swiftmailer.html.twig',
                ),
                'data_collector.dump' => array(
                    0 => 'dump',
                    1 => '@Debug/Profiler/dump.html.twig',
                ),
                'data_collector.config' => array(
                    0 => 'config',
                    1 => '@WebProfiler/Collector/config.html.twig',
                ),
            ),
            'console.command.ids' => array(
                'console.command.symfony_bundle_frameworkbundle_command_aboutcommand' => 'console.command.about',
                'console.command.symfony_bundle_frameworkbundle_command_assetsinstallcommand' => 'console.command.assets_install',
                'console.command.symfony_bundle_frameworkbundle_command_cacheclearcommand' => 'console.command.cache_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolclearcommand' => 'console.command.cache_pool_clear',
                'console.command.symfony_bundle_frameworkbundle_command_cachepoolprunecommand' => 'console.command.cache_pool_prune',
                'console.command.symfony_bundle_frameworkbundle_command_cachewarmupcommand' => 'console.command.cache_warmup',
                'console.command.symfony_bundle_frameworkbundle_command_configdebugcommand' => 'console.command.config_debug',
                'console.command.symfony_bundle_frameworkbundle_command_configdumpreferencecommand' => 'console.command.config_dump_reference',
                'console.command.symfony_bundle_frameworkbundle_command_containerdebugcommand' => 'console.command.container_debug',
                'console.command.symfony_bundle_frameworkbundle_command_debugautowiringcommand' => 'console.command.debug_autowiring',
                'console.command.symfony_bundle_frameworkbundle_command_eventdispatcherdebugcommand' => 'console.command.event_dispatcher_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routerdebugcommand' => 'console.command.router_debug',
                'console.command.symfony_bundle_frameworkbundle_command_routermatchcommand' => 'console.command.router_match',
                'console.command.symfony_bundle_frameworkbundle_command_xlifflintcommand' => 'console.command.xliff_lint',
                'console.command.symfony_bundle_frameworkbundle_command_yamllintcommand' => 'console.command.yaml_lint',
                'console.command.symfony_component_form_command_debugcommand' => 'console.command.form_debug',
                'console.command.symfony_bundle_securitybundle_command_userpasswordencodercommand' => 'security.command.user_password_encoder',
                'console.command.symfony_bridge_twig_command_debugcommand' => 'twig.command.debug',
                'console.command.symfony_bundle_twigbundle_command_lintcommand' => 'twig.command.lint',
                'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_containscommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_deletecommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_flushcommand',
                'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand' => 'console.command.doctrine_bundle_doctrinecachebundle_command_statscommand',
                'console.command.doctrine_bundle_doctrinebundle_command_createdatabasedoctrinecommand' => 'doctrine.database_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_dropdatabasedoctrinecommand' => 'doctrine.database_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_generateentitiesdoctrinecommand' => 'doctrine.generate_entities_command',
                'console.command.doctrine_bundle_doctrinebundle_command_importmappingdoctrinecommand' => 'doctrine.mapping_import_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearmetadatacachedoctrinecommand' => 'doctrine.cache_clear_metadata_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearquerycachedoctrinecommand' => 'doctrine.cache_clear_query_cache_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_clearresultcachedoctrinecommand' => 'doctrine.cache_clear_result_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_collectionregiondoctrinecommand' => 'doctrine.cache_collection_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_convertmappingdoctrinecommand' => 'doctrine.mapping_convert_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_createschemadoctrinecommand' => 'doctrine.schema_create_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_dropschemadoctrinecommand' => 'doctrine.schema_drop_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_ensureproductionsettingsdoctrinecommand' => 'doctrine.ensure_production_settings_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_entityregioncachedoctrinecommand' => 'doctrine.clear_entity_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_importdoctrinecommand' => 'doctrine.database_import_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_infodoctrinecommand' => 'doctrine.mapping_info_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_queryregioncachedoctrinecommand' => 'doctrine.clear_query_region_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_rundqldoctrinecommand' => 'doctrine.query_dql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_runsqldoctrinecommand' => 'doctrine.query_sql_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_updateschemadoctrinecommand' => 'doctrine.schema_update_command',
                'console.command.doctrine_bundle_doctrinebundle_command_proxy_validateschemacommand' => 'doctrine.schema_validate_command',
                'console.command.apiplatform_core_bridge_symfony_bundle_command_swaggercommand' => 'console.command.apiplatform_core_bridge_symfony_bundle_command_swaggercommand',
                'console.command.sensiolabs_security_command_securitycheckercommand' => 'console.command.sensiolabs_security_command_securitycheckercommand',
                'console.command.symfony_bundle_webserverbundle_command_serverruncommand' => 'web_server.command.server_run',
                'console.command.symfony_bundle_webserverbundle_command_serverstartcommand' => 'web_server.command.server_start',
                'console.command.symfony_bundle_webserverbundle_command_serverstopcommand' => 'web_server.command.server_stop',
                'console.command.symfony_bundle_webserverbundle_command_serverstatuscommand' => 'web_server.command.server_status',
                'console.command.symfony_bundle_webserverbundle_command_serverlogcommand' => 'web_server.command.server_log',
            ),
            'console.lazy_command.ids' => array(
                'console.command.about' => true,
                'console.command.assets_install' => true,
                'console.command.cache_clear' => true,
                'console.command.cache_pool_clear' => true,
                'console.command.cache_pool_prune' => true,
                'console.command.cache_warmup' => true,
                'console.command.config_debug' => true,
                'console.command.config_dump_reference' => true,
                'console.command.container_debug' => true,
                'console.command.debug_autowiring' => true,
                'console.command.event_dispatcher_debug' => true,
                'console.command.router_debug' => true,
                'console.command.router_match' => true,
                'console.command.xliff_lint' => true,
                'console.command.yaml_lint' => true,
                'console.command.form_debug' => true,
                'security.command.user_password_encoder' => true,
                'twig.command.debug' => true,
                'twig.command.lint' => true,
                'doctrine.database_create_command' => true,
                'doctrine.database_drop_command' => true,
                'doctrine.generate_entities_command' => true,
                'doctrine.mapping_import_command' => true,
                'doctrine.cache_clear_metadata_command' => true,
                'doctrine.cache_clear_query_cache_command' => true,
                'doctrine.cache_clear_result_command' => true,
                'doctrine.cache_collection_region_command' => true,
                'doctrine.mapping_convert_command' => true,
                'doctrine.schema_create_command' => true,
                'doctrine.schema_drop_command' => true,
                'doctrine.ensure_production_settings_command' => true,
                'doctrine.clear_entity_region_command' => true,
                'doctrine.database_import_command' => true,
                'doctrine.mapping_info_command' => true,
                'doctrine.clear_query_region_command' => true,
                'doctrine.query_dql_command' => true,
                'doctrine.query_sql_command' => true,
                'doctrine.schema_update_command' => true,
                'doctrine.schema_validate_command' => true,
                'web_server.command.server_run' => true,
                'web_server.command.server_start' => true,
                'web_server.command.server_stop' => true,
                'web_server.command.server_status' => true,
                'web_server.command.server_log' => true,
            ),
        );
    }
}
