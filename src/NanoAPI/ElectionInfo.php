<?php
// automatically generated by the FlatBuffers compiler, do not modify

namespace MikeRow\Bandano\NanoAPI;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class ElectionInfo extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return ElectionInfo
     */
    public static function getRootAsElectionInfo(ByteBuffer $bb)
    {
        $obj = new ElectionInfo();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return ElectionInfo
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    /**
     * @return ulong
     */
    public function getDuration()
    {
        $o = $this->__offset(4);
        return $o != 0 ? $this->bb->getUlong($o + $this->bb_pos) : 0;
    }

    /**
     * @return ulong
     */
    public function getTime()
    {
        $o = $this->__offset(6);
        return $o != 0 ? $this->bb->getUlong($o + $this->bb_pos) : 0;
    }

    public function getTally()
    {
        $o = $this->__offset(8);
        return $o != 0 ? $this->__string($o + $this->bb_pos) : null;
    }

    /**
     * @return ulong
     */
    public function getRequestCount()
    {
        $o = $this->__offset(10);
        return $o != 0 ? $this->bb->getUlong($o + $this->bb_pos) : 0;
    }

    /**
     * @return ulong
     */
    public function getBlockCount()
    {
        $o = $this->__offset(12);
        return $o != 0 ? $this->bb->getUlong($o + $this->bb_pos) : 0;
    }

    /**
     * @return ulong
     */
    public function getVoterCount()
    {
        $o = $this->__offset(14);
        return $o != 0 ? $this->bb->getUlong($o + $this->bb_pos) : 0;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startElectionInfo(FlatBufferBuilder $builder)
    {
        $builder->StartObject(6);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return ElectionInfo
     */
    public static function createElectionInfo(FlatBufferBuilder $builder, $duration, $time, $tally, $request_count, $block_count, $voter_count)
    {
        $builder->startObject(6);
        self::addDuration($builder, $duration);
        self::addTime($builder, $time);
        self::addTally($builder, $tally);
        self::addRequestCount($builder, $request_count);
        self::addBlockCount($builder, $block_count);
        self::addVoterCount($builder, $voter_count);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param ulong
     * @return void
     */
    public static function addDuration(FlatBufferBuilder $builder, $duration)
    {
        $builder->addUlongX(0, $duration, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param ulong
     * @return void
     */
    public static function addTime(FlatBufferBuilder $builder, $time)
    {
        $builder->addUlongX(1, $time, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param StringOffset
     * @return void
     */
    public static function addTally(FlatBufferBuilder $builder, $tally)
    {
        $builder->addOffsetX(2, $tally, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param ulong
     * @return void
     */
    public static function addRequestCount(FlatBufferBuilder $builder, $requestCount)
    {
        $builder->addUlongX(3, $requestCount, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param ulong
     * @return void
     */
    public static function addBlockCount(FlatBufferBuilder $builder, $blockCount)
    {
        $builder->addUlongX(4, $blockCount, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @param ulong
     * @return void
     */
    public static function addVoterCount(FlatBufferBuilder $builder, $voterCount)
    {
        $builder->addUlongX(5, $voterCount, 0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endElectionInfo(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}
