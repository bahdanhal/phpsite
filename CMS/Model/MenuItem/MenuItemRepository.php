<?php

namespace CMS\Model\MenuItem;

use Engine\Model;

/**
 * Class MenuItemRepository
 * @package CMS\Model\MenuItem
 */
class MenuItemRepository extends Model
{
    const NEW_MENU_ITEM_NAME = 'New item';
    const FIELD_NAME = 'name';
    const FIELD_LINK = 'link';

    public function getAllItems()
    {
        $sql = $this->queryBuilder
            ->select()
            ->from('menu_item')
            ->orderBy('id', 'ASC')
            ->sql();

        return $this->db->query($sql);
    }

    /**
     * @param int $menuId
     * @param array $params
     * @return mixed
     */
    public function getItems($menuId, $params = [])
    {
        $sql = $this->queryBuilder
            ->select()
            ->from('menu_item')
            ->where('menu_id', $menuId)
            ->orderBy('position', 'ASC')
            ->sql();

        return $this->db->query($sql, $this->queryBuilder->values);
    }

    /**
     * @param array $params
     * @return int
     */
    public function add($params = [])
    {
        if (empty($params)) {
            return 0;
        }

        $menuItem = new MenuItem;
        $menuItem->setMenuId($params['menu_id']);
        $menuItem->setName(self::NEW_MENU_ITEM_NAME);
        $menuItemId = $menuItem->save();

        return $menuItemId;
    }

    /**
     * @param int $itemId
     * @return mixed
     */
    public function remove($itemId)
    {
        $sql = $this->queryBuilder
            ->delete()
            ->from('menu_item')
            ->where('id', $itemId)
            ->sql();

        return $this->db->query($sql, $this->queryBuilder->values);
    }

    /**
     * @param array $params
     */
    public function sort($params = [])
    {
        $items = isset($params['data']) ? json_decode($params['data']) : [];

        if (!empty($items) and isset($items[0])) {
            foreach ($items[0] as $position => $item) {
                $this->db->execute(
                    $this->queryBuilder
                        ->update('menu_item')
                        ->set(['position' => $position])
                        ->where('id', $item->id)
                        ->sql(),
                    $this->queryBuilder->values
                );
            }
        }
    }
}
