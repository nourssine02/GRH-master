<?php

namespace ContainerVgz7bPf;
include_once \dirname(__DIR__, 4).'/vendor/doctrine/persistence/lib/Doctrine/Persistence/ObjectManager.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManagerInterface.php';
include_once \dirname(__DIR__, 4).'/vendor/doctrine/orm/lib/Doctrine/ORM/EntityManager.php';

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    /**
     * @var bool[] map of public properties of the parent class
     */
    private static $publicProperties43827 = [

    ];
    /**
     * @var \Doctrine\ORM\EntityManager|null wrapped object, if the proxy is initialized
     */
    private $valueHolder06291 = null;
    /**
     * @var \Closure|null initializer responsible for generating the wrapped object
     */
    private $initializer5d8f7 = null;

    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;

        if (! $this->valueHolder06291) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder06291 = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);

        }

        $this->valueHolder06291->__construct($conn, $config, $eventManager);
    }

    /**
     * Constructor for lazy initialization
     *
     * @param \Closure|null $initializer
     */
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;

        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();

        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);

        $instance->initializer5d8f7 = $initializer;

        return $instance;
    }

    public function getConnection()
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'getConnection', array(), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->getConnection();
    }

    public function getMetadataFactory()
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'getMetadataFactory', array(), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->getMetadataFactory();
    }

    public function getExpressionBuilder()
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'getExpressionBuilder', array(), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->getExpressionBuilder();
    }

    public function beginTransaction()
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'beginTransaction', array(), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->beginTransaction();
    }

    public function getCache()
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'getCache', array(), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->getCache();
    }

    public function transactional($func)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'transactional', array('func' => $func), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->transactional($func);
    }

    public function wrapInTransaction(callable $func)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'wrapInTransaction', array('func' => $func), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->wrapInTransaction($func);
    }

    public function commit()
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'commit', array(), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->commit();
    }

    public function rollback()
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'rollback', array(), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->rollback();
    }

    public function getClassMetadata($className)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'getClassMetadata', array('className' => $className), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->getClassMetadata($className);
    }

    public function createQuery($dql = '')
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'createQuery', array('dql' => $dql), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->createQuery($dql);
    }

    public function createNamedQuery($name)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'createNamedQuery', array('name' => $name), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->createNamedQuery($name);
    }

    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->createNativeQuery($sql, $rsm);
    }

    public function createNamedNativeQuery($name)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->createNamedNativeQuery($name);
    }

    public function createQueryBuilder()
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'createQueryBuilder', array(), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->createQueryBuilder();
    }

    public function flush($entity = null)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'flush', array('entity' => $entity), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->flush($entity);
    }

    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->find($className, $id, $lockMode, $lockVersion);
    }

    public function getReference($entityName, $id)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->getReference($entityName, $id);
    }

    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->getPartialReference($entityName, $identifier);
    }

    public function clear($entityName = null)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'clear', array('entityName' => $entityName), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->clear($entityName);
    }

    public function close()
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'close', array(), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->close();
    }

    public function persist($entity)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'persist', array('entity' => $entity), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->persist($entity);
    }

    public function remove($entity)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'remove', array('entity' => $entity), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->remove($entity);
    }

    public function refresh($entity)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'refresh', array('entity' => $entity), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->refresh($entity);
    }

    public function detach($entity)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'detach', array('entity' => $entity), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->detach($entity);
    }

    public function merge($entity)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'merge', array('entity' => $entity), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->merge($entity);
    }

    public function copy($entity, $deep = false)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->copy($entity, $deep);
    }

    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->lock($entity, $lockMode, $lockVersion);
    }

    public function getRepository($entityName)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'getRepository', array('entityName' => $entityName), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->getRepository($entityName);
    }

    public function contains($entity)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'contains', array('entity' => $entity), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->contains($entity);
    }

    public function getEventManager()
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'getEventManager', array(), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->getEventManager();
    }

    public function getConfiguration()
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'getConfiguration', array(), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->getConfiguration();
    }

    public function isOpen()
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'isOpen', array(), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->isOpen();
    }

    public function getUnitOfWork()
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'getUnitOfWork', array(), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->getUnitOfWork();
    }

    public function getHydrator($hydrationMode)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->getHydrator($hydrationMode);
    }

    public function newHydrator($hydrationMode)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->newHydrator($hydrationMode);
    }

    public function getProxyFactory()
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'getProxyFactory', array(), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->getProxyFactory();
    }

    public function initializeObject($obj)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'initializeObject', array('obj' => $obj), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->initializeObject($obj);
    }

    public function getFilters()
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'getFilters', array(), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->getFilters();
    }

    public function isFiltersStateClean()
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'isFiltersStateClean', array(), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->isFiltersStateClean();
    }

    public function hasFilters()
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'hasFilters', array(), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return $this->valueHolder06291->hasFilters();
    }

    public function & __get($name)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, '__get', ['name' => $name], $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        if (isset(self::$publicProperties43827[$name])) {
            return $this->valueHolder06291->$name;
        }

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder06291;

            $backtrace = debug_backtrace(false, 1);
            trigger_error(
                sprintf(
                    'Undefined property: %s::$%s in %s on line %s',
                    $realInstanceReflection->getName(),
                    $name,
                    $backtrace[0]['file'],
                    $backtrace[0]['line']
                ),
                \E_USER_NOTICE
            );
            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder06291;
        $accessor = function & () use ($targetObject, $name) {
            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __set($name, $value)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder06291;

            $targetObject->$name = $value;

            return $targetObject->$name;
        }

        $targetObject = $this->valueHolder06291;
        $accessor = function & () use ($targetObject, $name, $value) {
            $targetObject->$name = $value;

            return $targetObject->$name;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = & $accessor();

        return $returnValue;
    }

    public function __isset($name)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, '__isset', array('name' => $name), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder06291;

            return isset($targetObject->$name);
        }

        $targetObject = $this->valueHolder06291;
        $accessor = function () use ($targetObject, $name) {
            return isset($targetObject->$name);
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $returnValue = $accessor();

        return $returnValue;
    }

    public function __unset($name)
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, '__unset', array('name' => $name), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');

        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder06291;

            unset($targetObject->$name);

            return;
        }

        $targetObject = $this->valueHolder06291;
        $accessor = function () use ($targetObject, $name) {
            unset($targetObject->$name);

            return;
        };
        $backtrace = debug_backtrace(true, 2);
        $scopeObject = isset($backtrace[1]['object']) ? $backtrace[1]['object'] : new \ProxyManager\Stub\EmptyClassStub();
        $accessor = $accessor->bindTo($scopeObject, get_class($scopeObject));
        $accessor();
    }

    public function __clone()
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, '__clone', array(), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        $this->valueHolder06291 = clone $this->valueHolder06291;
    }

    public function __sleep()
    {
        $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, '__sleep', array(), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;

        return array('valueHolder06291');
    }

    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }

    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer5d8f7 = $initializer;
    }

    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer5d8f7;
    }

    public function initializeProxy() : bool
    {
        return $this->initializer5d8f7 && ($this->initializer5d8f7->__invoke($valueHolder06291, $this, 'initializeProxy', array(), $this->initializer5d8f7) || 1) && $this->valueHolder06291 = $valueHolder06291;
    }

    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder06291;
    }

    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder06291;
    }
}

if (!\class_exists('EntityManager_9a5be93', false)) {
    \class_alias(__NAMESPACE__.'\\EntityManager_9a5be93', 'EntityManager_9a5be93', false);
}
