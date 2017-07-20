<?php
    /**
     * 
     * 進捗情報の配列を定義
     * 
    */
     $status_array =
    array(
          "NotYet"     => '未着手',
          'Undefine'   => 'スケジュール未定',
          'Scheduled'  => 'スケジュール済み', 
          'TrackingIn' => '追跡中',
          'OffTrack'   => 'オフ・トラック',	
          'Dangerous'  => '危険',
          'Done'       => '完了',
          'Closed'     => 'クローズ済み');

    function check_status($status, $status_array ){
        if( !$status || !ctype_alnum ( $status)){ $status = 'NotYet'; }
        else if( !$status_array[$status] ){ $status = 'NotYet';}
        return $status_array[$status];
    }
?>