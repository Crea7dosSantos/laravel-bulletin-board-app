<?php

namespace App\Http\Controllers\Concerns;

trait Viewformat
{
    /**
     * Formにわたすための配列
     *
     * @var array
     */
    private $formValue = [
        'indata' => [],
        'searchdata' => [],
        'master' => [],
        'notice' => [],
        'message' => [],
    ];
    /**
     * 入力データを取得します。
     *
     * @return void
     */
    public function getViewArray()
    {
        return $this->formValue;
    }
    /**
     * Inputデータを設定します。
     *
     * @param array|object $data 入力データを設定します。
     * @return void
     */
    public function setViewInput($data = [])
    {
        $this->formValue['indata'] = collect($data);
        return;
    }
    /**
     * 検索用データを設定します。
     *
     * @param array $data 検索用データを設定します。
     * @return void
     */
    public function setViewSearch($data)
    {
        $this->formValue['searchdata'] = $data;
        return;
    }
    /**
     * マスターデータを設定します。
     *
     * @param array $data マスター用データを設定します。
     * @return void
     */
    public function setViewMaster($data = [])
    {
        $this->formValue['master'] = collect($data);
        return;
    }
    /**
     * お知らせデータを設定します。
     *
     * @param string $data お知らせ用データを設定します。
     * @return void
     */
    public function setViewNotice($data = null)
    {
        $noticeList = $this->formValue['notice'];
        if ($noticeList != null) {
            $noticeList = $noticeList->concat($data);
        } else {
            $noticeList = collect($data);
        }
        $this->formValue['notice'] = $noticeList;
        return;
    }
    /**
     * メッセージ用データを設定します。
     *
     * @param array $data メッセージ用データを設定します。
     * @return void
     */
    public function setViewMessage($data)
    {
        $this->formValue['message'] = collect($data);
        return;
    }
}
