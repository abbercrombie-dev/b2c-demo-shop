import './contact-us-input.scss';
import register from 'ShopUi/app/registry';
export default register(
    'contact-us-input',
    () => import(/* webpackMode: "lazy" */'./contact-us-input')
);
