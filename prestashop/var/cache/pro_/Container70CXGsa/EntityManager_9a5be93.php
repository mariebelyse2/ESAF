<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder12f9d = null;
    private $initializerc87d9 = null;
    private static $publicPropertiesc499c = [
        
    ];
    public function getConnection()
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'getConnection', array(), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'getMetadataFactory', array(), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'getExpressionBuilder', array(), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'beginTransaction', array(), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->beginTransaction();
    }
    public function getCache()
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'getCache', array(), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->getCache();
    }
    public function transactional($func)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'transactional', array('func' => $func), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'wrapInTransaction', array('func' => $func), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'commit', array(), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->commit();
    }
    public function rollback()
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'rollback', array(), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'getClassMetadata', array('className' => $className), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'createQuery', array('dql' => $dql), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'createNamedQuery', array('name' => $name), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'createQueryBuilder', array(), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'flush', array('entity' => $entity), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'clear', array('entityName' => $entityName), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->clear($entityName);
    }
    public function close()
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'close', array(), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->close();
    }
    public function persist($entity)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'persist', array('entity' => $entity), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'remove', array('entity' => $entity), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'refresh', array('entity' => $entity), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'detach', array('entity' => $entity), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'merge', array('entity' => $entity), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'getRepository', array('entityName' => $entityName), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'contains', array('entity' => $entity), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'getEventManager', array(), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'getConfiguration', array(), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'isOpen', array(), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'getUnitOfWork', array(), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'getProxyFactory', array(), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'initializeObject', array('obj' => $obj), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'getFilters', array(), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'isFiltersStateClean', array(), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'hasFilters', array(), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return $this->valueHolder12f9d->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializerc87d9 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder12f9d) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder12f9d = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder12f9d->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, '__get', ['name' => $name], $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        if (isset(self::$publicPropertiesc499c[$name])) {
            return $this->valueHolder12f9d->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12f9d;
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
        $targetObject = $this->valueHolder12f9d;
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
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, '__set', array('name' => $name, 'value' => $value), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12f9d;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder12f9d;
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
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, '__isset', array('name' => $name), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12f9d;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder12f9d;
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
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, '__unset', array('name' => $name), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder12f9d;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder12f9d;
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
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, '__clone', array(), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        $this->valueHolder12f9d = clone $this->valueHolder12f9d;
    }
    public function __sleep()
    {
        $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, '__sleep', array(), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
        return array('valueHolder12f9d');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializerc87d9 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializerc87d9;
    }
    public function initializeProxy() : bool
    {
        return $this->initializerc87d9 && ($this->initializerc87d9->__invoke($valueHolder12f9d, $this, 'initializeProxy', array(), $this->initializerc87d9) || 1) && $this->valueHolder12f9d = $valueHolder12f9d;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder12f9d;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder12f9d;
    }
}
