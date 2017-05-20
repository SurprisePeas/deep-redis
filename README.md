# Redis 拓展学习记录



##### Redis 是一个基于内存的高性能key-value数据库，构建了自己的VM 机制

##### Redis的出色之处不仅仅是性能，Redis最大的魅力是支持保存多种[数据结构](http://www.redis.cn/topics/data-types-intro.html)， 轻量级且高效的List消息队列服务，支持数据的持久化，数据备份等优秀功能


- 常用数据类型: 

  ```shell
  Strings
  Lists
  Sets 求交集、并集
  Sorted Set 
  hashes
  ```

  ​

- redis利用队列技术将并发访问变为串行访问，消除了传统数据库串行控制的开销

  ​


##### 分布式系统

redis支持主从的模式。原则：Master会将数据同步到slave，而slave不会将数据同步到master。Slave启动时会连接master来同步数据。

这是一个典型的分布式读写分离模型。我们可以利用master来插入数据，slave提供检索服务。这样可以有效减少单个机器的并发访问数量



##### redis 的回收策略

- volatile-lru：从已设置过期时间的数据集（server.db[i].expires）中挑选最近最少使用的数据淘汰
- volatile-ttl：从已设置过期时间的数据集（server.db[i].expires）中挑选将要过期的数据淘汰
- volatile-random：从已设置过期时间的数据集（server.db[i].expires）中任意选择数据淘汰
- allkeys-lru：从数据集（server.db[i].dict）中挑选最近最少使用的数据淘汰
- allkeys-random：从数据集（server.db[i].dict）中任意选择数据淘汰
- no-enviction（驱逐）：禁止驱逐数据



