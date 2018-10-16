import Enum from 'yii-steroids/base/Enum';

export default class UserRoleMeta extends Enum {

    static ADMIN = 'admin';
    static OPERATOR = 'operator';
    static USER = 'user';

    static getLabels() {
        return {
            [this.ADMIN]: __('Администратор'),
            [this.OPERATOR]: __('Оператор'),
            [this.USER]: __('Пользователь'),
        };
    }
}
