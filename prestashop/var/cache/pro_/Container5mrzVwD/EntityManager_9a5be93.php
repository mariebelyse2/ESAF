<?php

class EntityManager_9a5be93 extends \Doctrine\ORM\EntityManager implements \ProxyManager\Proxy\VirtualProxyInterface
{
    private $valueHolder0c55a = null;
    private $initializer6d964 = null;
    private static $publicProperties8d3d4 = [
        
    ];
    public function getConnection()
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'getConnection', array(), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->getConnection();
    }
    public function getMetadataFactory()
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'getMetadataFactory', array(), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->getMetadataFactory();
    }
    public function getExpressionBuilder()
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'getExpressionBuilder', array(), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->getExpressionBuilder();
    }
    public function beginTransaction()
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'beginTransaction', array(), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->beginTransaction();
    }
    public function getCache()
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'getCache', array(), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->getCache();
    }
    public function transactional($func)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'transactional', array('func' => $func), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->transactional($func);
    }
    public function wrapInTransaction(callable $func)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'wrapInTransaction', array('func' => $func), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->wrapInTransaction($func);
    }
    public function commit()
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'commit', array(), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->commit();
    }
    public function rollback()
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'rollback', array(), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->rollback();
    }
    public function getClassMetadata($className)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'getClassMetadata', array('className' => $className), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->getClassMetadata($className);
    }
    public function createQuery($dql = '')
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'createQuery', array('dql' => $dql), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->createQuery($dql);
    }
    public function createNamedQuery($name)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'createNamedQuery', array('name' => $name), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->createNamedQuery($name);
    }
    public function createNativeQuery($sql, \Doctrine\ORM\Query\ResultSetMapping $rsm)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'createNativeQuery', array('sql' => $sql, 'rsm' => $rsm), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->createNativeQuery($sql, $rsm);
    }
    public function createNamedNativeQuery($name)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'createNamedNativeQuery', array('name' => $name), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->createNamedNativeQuery($name);
    }
    public function createQueryBuilder()
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'createQueryBuilder', array(), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->createQueryBuilder();
    }
    public function flush($entity = null)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'flush', array('entity' => $entity), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->flush($entity);
    }
    public function find($className, $id, $lockMode = null, $lockVersion = null)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'find', array('className' => $className, 'id' => $id, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->find($className, $id, $lockMode, $lockVersion);
    }
    public function getReference($entityName, $id)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'getReference', array('entityName' => $entityName, 'id' => $id), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->getReference($entityName, $id);
    }
    public function getPartialReference($entityName, $identifier)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'getPartialReference', array('entityName' => $entityName, 'identifier' => $identifier), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->getPartialReference($entityName, $identifier);
    }
    public function clear($entityName = null)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'clear', array('entityName' => $entityName), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->clear($entityName);
    }
    public function close()
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'close', array(), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->close();
    }
    public function persist($entity)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'persist', array('entity' => $entity), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->persist($entity);
    }
    public function remove($entity)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'remove', array('entity' => $entity), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->remove($entity);
    }
    public function refresh($entity)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'refresh', array('entity' => $entity), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->refresh($entity);
    }
    public function detach($entity)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'detach', array('entity' => $entity), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->detach($entity);
    }
    public function merge($entity)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'merge', array('entity' => $entity), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->merge($entity);
    }
    public function copy($entity, $deep = false)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'copy', array('entity' => $entity, 'deep' => $deep), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->copy($entity, $deep);
    }
    public function lock($entity, $lockMode, $lockVersion = null)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'lock', array('entity' => $entity, 'lockMode' => $lockMode, 'lockVersion' => $lockVersion), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->lock($entity, $lockMode, $lockVersion);
    }
    public function getRepository($entityName)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'getRepository', array('entityName' => $entityName), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->getRepository($entityName);
    }
    public function contains($entity)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'contains', array('entity' => $entity), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->contains($entity);
    }
    public function getEventManager()
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'getEventManager', array(), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->getEventManager();
    }
    public function getConfiguration()
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'getConfiguration', array(), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->getConfiguration();
    }
    public function isOpen()
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'isOpen', array(), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->isOpen();
    }
    public function getUnitOfWork()
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'getUnitOfWork', array(), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->getUnitOfWork();
    }
    public function getHydrator($hydrationMode)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'getHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->getHydrator($hydrationMode);
    }
    public function newHydrator($hydrationMode)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'newHydrator', array('hydrationMode' => $hydrationMode), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->newHydrator($hydrationMode);
    }
    public function getProxyFactory()
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'getProxyFactory', array(), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->getProxyFactory();
    }
    public function initializeObject($obj)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'initializeObject', array('obj' => $obj), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->initializeObject($obj);
    }
    public function getFilters()
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'getFilters', array(), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->getFilters();
    }
    public function isFiltersStateClean()
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'isFiltersStateClean', array(), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->isFiltersStateClean();
    }
    public function hasFilters()
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'hasFilters', array(), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return $this->valueHolder0c55a->hasFilters();
    }
    public static function staticProxyConstructor($initializer)
    {
        static $reflection;
        $reflection = $reflection ?? new \ReflectionClass(__CLASS__);
        $instance   = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $instance, 'Doctrine\\ORM\\EntityManager')->__invoke($instance);
        $instance->initializer6d964 = $initializer;
        return $instance;
    }
    protected function __construct(\Doctrine\DBAL\Connection $conn, \Doctrine\ORM\Configuration $config, \Doctrine\Common\EventManager $eventManager)
    {
        static $reflection;
        if (! $this->valueHolder0c55a) {
            $reflection = $reflection ?? new \ReflectionClass('Doctrine\\ORM\\EntityManager');
            $this->valueHolder0c55a = $reflection->newInstanceWithoutConstructor();
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
        }
        $this->valueHolder0c55a->__construct($conn, $config, $eventManager);
    }
    public function & __get($name)
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, '__get', ['name' => $name], $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        if (isset(self::$publicProperties8d3d4[$name])) {
            return $this->valueHolder0c55a->$name;
        }
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0c55a;
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
        $targetObject = $this->valueHolder0c55a;
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
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, '__set', array('name' => $name, 'value' => $value), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0c55a;
            $targetObject->$name = $value;
            return $targetObject->$name;
        }
        $targetObject = $this->valueHolder0c55a;
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
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, '__isset', array('name' => $name), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0c55a;
            return isset($targetObject->$name);
        }
        $targetObject = $this->valueHolder0c55a;
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
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, '__unset', array('name' => $name), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        $realInstanceReflection = new \ReflectionClass('Doctrine\\ORM\\EntityManager');
        if (! $realInstanceReflection->hasProperty($name)) {
            $targetObject = $this->valueHolder0c55a;
            unset($targetObject->$name);
            return;
        }
        $targetObject = $this->valueHolder0c55a;
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
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, '__clone', array(), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        $this->valueHolder0c55a = clone $this->valueHolder0c55a;
    }
    public function __sleep()
    {
        $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, '__sleep', array(), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
        return array('valueHolder0c55a');
    }
    public function __wakeup()
    {
        \Closure::bind(function (\Doctrine\ORM\EntityManager $instance) {
            unset($instance->config, $instance->conn, $instance->metadataFactory, $instance->unitOfWork, $instance->eventManager, $instance->proxyFactory, $instance->repositoryFactory, $instance->expressionBuilder, $instance->closed, $instance->filterCollection, $instance->cache);
        }, $this, 'Doctrine\\ORM\\EntityManager')->__invoke($this);
    }
    public function setProxyInitializer(\Closure $initializer = null) : void
    {
        $this->initializer6d964 = $initializer;
    }
    public function getProxyInitializer() : ?\Closure
    {
        return $this->initializer6d964;
    }
    public function initializeProxy() : bool
    {
        return $this->initializer6d964 && ($this->initializer6d964->__invoke($valueHolder0c55a, $this, 'initializeProxy', array(), $this->initializer6d964) || 1) && $this->valueHolder0c55a = $valueHolder0c55a;
    }
    public function isProxyInitialized() : bool
    {
        return null !== $this->valueHolder0c55a;
    }
    public function getWrappedValueHolderValue()
    {
        return $this->valueHolder0c55a;
    }
}
