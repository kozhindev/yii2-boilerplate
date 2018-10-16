import BaseUserMeta from '../../../../vendor/kozhindev/yii-steroids/backend/modules/user/models/meta/UserMeta';

import {locale} from 'components';
import PassportVerifyStatusMeta from '../../../profile/enums/meta/PassportVerifyStatusMeta';

export default class UserMeta extends BaseUserMeta {

    static className = 'app\\user\\models\\User';

    static fields() {
        return {
            ...BaseUserMeta.fields(),
            'firstName': {
                'component': 'InputField',
                'attribute': 'firstName',
                'label': locale.t('Имя')
            },
            'lastName': {
                'component': 'InputField',
                'attribute': 'lastName',
                'label': locale.t('Фамилия')
            },
            'middleName': {
                'component': 'InputField',
                'attribute': 'middleName',
                'label': locale.t('Отчество')
            },
            'country': {
                'component': 'InputField',
                'attribute': 'country',
                'label': locale.t('Страна')
            },
            'birthdate': {
                'component': 'DateField',
                'attribute': 'birthdate',
                'label': locale.t('Дата рождения')
            },
            'google2faSecretKey': {
                'component': 'InputField',
                'attribute': 'google2faSecretKey',
                'label': locale.t('Google 2FA Key')
            },
            'google2faEnable': {
                'component': 'CheckboxField',
                'attribute': 'google2faEnable',
                'label': locale.t('Google 2FA')
            },
            'passportPhotosIds': {
                'component': 'FileField',
                'attribute': 'passportPhotosIds',
                'multiple': true,
                'label': locale.t('Фотографии паспорта')
            },
            'passportVerifyStatus': {
                'component': 'DropDownField',
                'attribute': 'passportVerifyStatus',
                'items': PassportVerifyStatusMeta,
                'label': locale.t('Статус верификации паспорта')
            },
            'passportVerifyComment': {
                'component': 'TextField',
                'attribute': 'passportVerifyComment',
                'label': locale.t('Комментарий верификации паспорта')
            }
        };
    }

    static formatters() {
        return {
            ...BaseUserMeta.formatters(),
            'firstName': {
                'label': locale.t('Имя')
            },
            'lastName': {
                'label': locale.t('Фамилия')
            },
            'middleName': {
                'label': locale.t('Отчество')
            },
            'country': {
                'label': locale.t('Страна')
            },
            'birthdate': {
                'label': locale.t('Дата рождения')
            },
            'google2faSecretKey': {
                'label': locale.t('Google 2FA Key')
            },
            'google2faEnable': {
                'label': locale.t('Google 2FA')
            },
            'passportPhotosIds': {
                'label': locale.t('Фотографии паспорта')
            },
            'passportVerifyStatus': {
                'component': 'EnumFormatter',
                'attribute': 'passportVerifyStatus',
                'items': PassportVerifyStatusMeta,
                'label': locale.t('Статус верификации паспорта')
            },
            'passportVerifyComment': {
                'label': locale.t('Комментарий верификации паспорта')
            }
        };
    }

}
