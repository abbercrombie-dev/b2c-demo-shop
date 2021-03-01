import Component from 'ShopUi/models/component';

export default class ContactUsInput extends Component {
    protected contactUsSubmit: HTMLInputElement;

    protected readyCallback(): void {}

    protected init(): void {
        this.contactUsSubmit = <HTMLInputElement>this.getElementsByClassName(`${this.jsName}-contact-us-submit`)[0];
        this.mapEvents();
    }

    protected mapEvents(): void {
        if (this.contactUsSubmit) {
            this.contactUsSubmit.addEventListener('click', (event: Event) => this.onSubmitClick(event));
        }
    }

    protected onSubmitClick(event: Event): void {
        event.preventDefault();
        this.contactUsSubmit.disabled = true;
        this.contactUsSubmit.value = 'Sending, please wait...';
        this.contactUsSubmit.form.submit();
    }

}
