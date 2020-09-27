<?php

class DataModel extends CI_Model
{
    function noDaf() {
        $query = $this->db->select('RIGHT(id_daf,3) as kode', FALSE);
        $query = $this->db->like('id_daf', "SMR");
        $query = $this->db->order_by('id_daf', 'DESC');
        $query = $this->db->limit(1);
        $query = $this->db->get('tb_seminar');
        if ($query->num_rows() <> 0) {
            $data = $query->row();
            $kode = intval($data->kode) + 1;
        } else {
            $kode = 1;
        }
        $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
        $kodefix = "SMR" . $kodemax;
        return $kodefix;
    }

    // Ada bug, dimana semua jadwal harus dikurangi 1 agar akurat
    function getPSOpen() { // presale
        return strtotime("2020-10-10 23:59:59");
    }

    function getPSClose() { // presale close
        return strtotime("2020-10-10 23:59:59");
    }

    function getSOpen() { // sale
        return strtotime("2020-10-10 23:59:59");
    }

    function getSClose() { // sale close
        return strtotime("2020-10-10 23:59:59");
    }

    function getOTSOpen() { // ots
        return strtotime("2020-10-10 23:59:59");
    }
    function getOTSClose() { // ots close
        return strtotime("2020-10-10 23:59:59");
    }
    // bug over

    function getHTMPrice() {
        $htm = 0;
        switch ($this->getHTS()) {
            case 'free':
                $htm = 0;
                break;
            case 'free':
                $htm = 0;
                break;
            case 'free':
                $htm = 0;
                break;
            default:
                $htm = 0;
                break;
        }
        return $htm;
    }

    function getHTS()
    {
        $hts = "";
        $psaleopen = $this->getPSOpen();
        $psaleclose = $this->getPSClose();
        $saleopen = $this->getSOpen();
        $saleclose = $this->getSClose();
        $otsopen = $this->getoTSOpen();
        $otsclose = $this->getoTSClose();

        $getDiffpsopen = ( $psaleopen - strtotime(date("Y/m/d H:i:s")) ) / 60 / 60 / 24;
        $getDiffpsclose = ( strtotime(date("Y/m/d H:i:s")) - $psaleclose ) / 60 / 60 / 24;
        //echo $getDiffAwal;
        if (($getDiffpsopen > 0) && ($getDiffpsclose <= 0)) {
            $hts = "free";
        } else if (($getDiffpsopen <= 0) && ($getDiffpsclose <= 0)) {
            // $hts = "presale";
            $hts = "free";
        } else if ($getDiffpsclose > 0) {
            $getDiffsopen = ( $saleopen - strtotime(date("Y/m/d H:i:s")) ) / 60 / 60 / 24;
            $getDiffsclose = ( strtotime(date("Y/m/d H:i:s")) - $saleclose ) / 60 / 60 / 24;
            //echo $getDiffAwal;
            if (($getDiffsopen > 0) && ($getDiffsclose <= 0)) {
                // $hts = "sale";
                $hts = "free";
            } else if (($getDiffsopen <= 0) && ($getDiffsclose <= 0)) {
                // $hts = "sale";
                $hts = "free";
            } else if ($getDiffsclose > 0) {
                $getDiffopen = ( $otsopen - strtotime(date("Y/m/d H:i:s")) ) / 60 / 60 / 24;
                $getDiffclose = ( strtotime(date("Y/m/d H:i:s")) - $otsclose ) / 60 / 60 / 24;
                //echo $getDiffAwal;
                if (($getDiffopen > 0) && ($getDiffclose <= 0)) {
                    // $hts = "sale";
                    $hts = "free";
                } else if (($getDiffopen <= 0) && ($getDiffclose <= 0)) {
                    // $hts = "ots";
                    $hts = "free";
                } else if ($getDiffclose > 0) {
                    $hts = "free";
                }
            }
        }
        return $hts;
    }

    function custom($q)
    {
        $query = $this->db->query($q);
        return $query;
    }

    function select($col)
    {
        $query = $this->db->select($col);
        return $query;
    }

    function getWhere($col, $kon)
    {
        $query = $this->db->where($col, $kon);
        return $query;
    }

    function order_by($col,$mode){
        $query = $this->db->order_by($col,$mode);
        return $query;
    }

    function getWhereArr($array)
    {
        $query = $this->db->where($array);
        return $query;
    }

    function getData($table)
    {
        $query = $this->db->get($table);
        return $query;
    }

    function getJoin($table, $condition, $type)
    {
        $query = $this->db->join($table, $condition, $type);
        return $query;
    }

    function distinct($col)
    {
        $query = $this->db->distinct();
        $query = $this->db->select($col);
        return $query;
    }

    function insert($table, $data)
    {
        $query = $this->db->insert($table, $data);
        return $query;
    }

    public function insert_multiple($table,$data)
    {
        $query = $this->db->insert_batch($table, $data);
        return $query;
    }

    public function update_multiple($table,$data,$id){
        $query = $this->db->update_batch($table,$data,$id);
        return $query;
    }

    function update($table, $data)
    {
        $query = $this->db->update($table, $data);
        return $query;
    }

    function delete($col, $condition, $table)
    {
        $query = $this->db->where($col, $condition);
        $query = $this->db->delete($table);
        return $query;
    }

    function delete_arr($where,$table){
        $query = $this->db->where($where);
        $query = $this->db->delete($table);
        return $query;
    }

    function getInsertId(){
        return $this->db->insert_id();
    }

    function Login($table, $where)
    {
        return $this->db->get_where($table, $where);
    }
}
