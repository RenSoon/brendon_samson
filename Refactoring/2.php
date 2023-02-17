<?php
class Haggis{

    public function getDistanceTravelled($time, $haggis){
        $acceleration = $this->computeAcceleration($haggis);
        $computedTime = $this->computePrimaryTime($time, $haggis);
        $result = 0.5 * $acceleration * $computedTime * $computedTime;
        $computedTime = $this->computeSecondaryTime($time, $haggis);
        if($computedTime > 0)
        {
            $primaryVelocity = $this->computePrimaryVelocity();
            $acceleration = $this-?computeSecondaryAcceleration();
            $result += $this->computeResult(); 
        }

        return $result;
    }

    public function computePrimaryAcceleration($haggis)
    {
        return $haggis->primaryForce / $haggis->mass;
    }

    public function computeSecondaryAcceleration($haggis)
    {
        return ($haggis->primaryForce + $haggis->secondaryForce) / $haggis->mass;
    }

    public function computePrimaryTime($time, $haggis)
    {
        return min($time, $haggis->delay);
    }

    public function computeSecondaryTime($time, $haggis)
    {
        return $time - $haggis->delay;
    }

    public function computePrimaryVelocity($acceleration, $haggis)
    {
        return $acceleration * $haggis->delay;
    }

    public function computeResult($primaryVelocity, $computedTime, $acceleration)
    {
        return ($primaryVelocity * $computedTime) + (0.5 * $acceleration * $computedTime * $computedTime);
    }

}

?>