<?php
// automatically generated by the FlatBuffers compiler, do not modify

namespace MikeRow\Bandano\NanoAPI;

use \Google\FlatBuffers\Struct;
use \Google\FlatBuffers\Table;
use \Google\FlatBuffers\ByteBuffer;
use \Google\FlatBuffers\FlatBufferBuilder;

class EventServiceStop extends Table
{
    /**
     * @param ByteBuffer $bb
     * @return EventServiceStop
     */
    public static function getRootAsEventServiceStop(ByteBuffer $bb)
    {
        $obj = new EventServiceStop();
        return ($obj->init($bb->getInt($bb->getPosition()) + $bb->getPosition(), $bb));
    }

    /**
     * @param int $_i offset
     * @param ByteBuffer $_bb
     * @return EventServiceStop
     **/
    public function init($_i, ByteBuffer $_bb)
    {
        $this->bb_pos = $_i;
        $this->bb = $_bb;
        return $this;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return void
     */
    public static function startEventServiceStop(FlatBufferBuilder $builder)
    {
        $builder->StartObject(0);
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return EventServiceStop
     */
    public static function createEventServiceStop(FlatBufferBuilder $builder)
    {
        $builder->startObject(0);
        $o = $builder->endObject();
        return $o;
    }

    /**
     * @param FlatBufferBuilder $builder
     * @return int table offset
     */
    public static function endEventServiceStop(FlatBufferBuilder $builder)
    {
        $o = $builder->endObject();
        return $o;
    }
}
