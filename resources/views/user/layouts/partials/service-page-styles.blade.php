<style>
    /* ===== Service sub-page: hero + alternating rows ===== */
    .pg-hero {
        position: relative;
        display: flex;
        align-items: center;
        min-height: 320px;
        overflow: hidden;
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }

    .pg-hero::before {
        content: "";
        position: absolute;
        inset: 0;
        background: linear-gradient(90deg, rgba(2, 15, 40, .93) 0%, rgba(2, 15, 40, .6) 55%, rgba(2, 15, 40, .3) 100%);
    }

    .pg-hero::after {
        content: "";
        position: absolute;
        left: 0;
        bottom: 0;
        width: 100%;
        height: 4px;
        background: linear-gradient(90deg, var(--primary), #ff8a4c);
    }

    .pg-hero__inner {
        position: relative;
        z-index: 1;
        padding: 64px 0;
    }

    .pg-hero__kicker {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 3px;
        font-size: 13px;
        color: var(--primary);
        margin-bottom: 14px;
    }

    .pg-hero__kicker::before {
        content: "";
        width: 32px;
        height: 3px;
        background: var(--primary);
    }

    .pg-hero h1 {
        color: #fff;
        font-weight: 800;
        font-size: clamp(2rem, 4vw, 3rem);
        line-height: 1.15;
        margin-bottom: 16px;
        text-shadow: 0 6px 26px rgba(0, 0, 0, .35);
    }

    .pg-hero__crumb {
        display: inline-flex;
        align-items: center;
        gap: 10px;
        padding: 9px 18px;
        border-radius: 50px;
        background: rgba(255, 255, 255, .1);
        -webkit-backdrop-filter: blur(6px);
        backdrop-filter: blur(6px);
        border: 1px solid rgba(255, 255, 255, .2);
        font-size: .88rem;
    }

    .pg-hero__crumb a {
        color: rgba(255, 255, 255, .8);
        text-decoration: none;
        transition: color .25s ease;
    }

    .pg-hero__crumb a:hover {
        color: var(--primary);
    }

    .pg-hero__crumb .sep {
        color: rgba(255, 255, 255, .4);
        font-size: .7rem;
    }

    .pg-hero__crumb .current {
        color: var(--primary);
        font-weight: 600;
    }

    .cn {
        position: relative;
        overflow: hidden;
        background: #fff;
        padding: 28px 0 56px;
    }

    .cn::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: radial-gradient(circle, rgba(2, 36, 91, .05) 1.5px, transparent 1.5px);
        background-size: 24px 24px;
        pointer-events: none;
    }

    .cn .container {
        position: relative;
        z-index: 1;
    }

    .cn-head .kicker {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 3px;
        font-size: 13px;
        color: var(--primary);
        margin-bottom: 12px;
    }

    .cn-head .kicker::before,
    .cn-head .kicker::after {
        content: "";
        width: 30px;
        height: 3px;
        background: var(--primary);
    }

    .cn-head h2 {
        font-size: clamp(1.25rem, 2vw, 1.6rem);
        font-weight: 800;
        color: var(--dark);
        margin: 0;
    }

    .cn-row {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 44px;
        align-items: center;
        margin-top: 44px;
    }

    .cn-row.is-rev .cn-media {
        order: 2;
    }

    .cn-media {
        position: relative;
        padding: 16px 26px 26px 0;
    }

    .cn-media__glow {
        position: absolute;
        inset: 0 6px 12px 0;
        background: radial-gradient(58% 58% at 78% 22%, rgba(255, 94, 20, .26), transparent 70%),
                    radial-gradient(58% 58% at 20% 92%, rgba(2, 36, 91, .28), transparent 70%);
        filter: blur(36px);
    }

    .cn-media__frame {
        position: relative;
        z-index: 1;
        border-radius: 22px;
        overflow: hidden;
        aspect-ratio: 16 / 11;
        box-shadow: 0 30px 56px -26px rgba(2, 36, 91, .45);
    }

    .cn-media__frame img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform .7s ease;
    }

    .cn-media__frame:hover img {
        transform: scale(1.06);
    }

    .cn-media__no {
        position: absolute;
        left: 0;
        bottom: 6px;
        z-index: 2;
        width: 62px;
        height: 62px;
        border-radius: 16px;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.4rem;
        font-weight: 800;
        color: #fff;
        background: linear-gradient(135deg, var(--primary), #ff8a4c);
        box-shadow: 0 16px 30px -10px rgba(255, 94, 20, .7);
    }

    .cn-body .kicker {
        font-size: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 2.5px;
        color: var(--primary);
    }

    .cn-body h3 {
        font-size: 1.5rem;
        font-weight: 800;
        color: var(--dark);
        margin: 6px 0 12px;
    }

    .cn-body h3::after {
        content: "";
        display: block;
        width: 46px;
        height: 3px;
        border-radius: 3px;
        margin-top: 12px;
        background: linear-gradient(90deg, var(--primary), #ff8a4c);
    }

    .cn-body p {
        color: #5b6472;
        line-height: 1.85;
        margin: 0;
    }

    @media (max-width: 991px) {
        .cn-row {
            grid-template-columns: 1fr;
            gap: 24px;
        }

        .cn-row .cn-media,
        .cn-row.is-rev .cn-media {
            order: -1;
            padding: 12px 16px 22px 0;
            max-width: 560px;
        }
    }

    /* ===== Registration form pages ===== */
    .vform {
        position: relative;
        overflow: hidden;
        background: #f6f8fc;
        padding: 40px 0 64px;
    }

    .vform::before {
        content: "";
        position: absolute;
        inset: 0;
        background-image: radial-gradient(circle, rgba(2, 36, 91, .05) 1.5px, transparent 1.5px);
        background-size: 24px 24px;
        pointer-events: none;
    }

    .vform .container {
        position: relative;
        z-index: 1;
    }

    .vform-card {
        background: #fff;
        border: 1px solid #edf0f6;
        border-radius: 20px;
        padding: 32px;
        box-shadow: 0 24px 46px -30px rgba(2, 36, 91, .4);
    }

    .vform-head {
        margin-bottom: 24px;
        padding-bottom: 18px;
        border-bottom: 1px solid #eef1f6;
    }

    .vform-head .kicker {
        display: inline-flex;
        align-items: center;
        gap: 12px;
        font-weight: 700;
        text-transform: uppercase;
        letter-spacing: 3px;
        font-size: 12px;
        color: var(--primary);
        margin-bottom: 10px;
    }

    .vform-head .kicker::before {
        content: "";
        width: 28px;
        height: 3px;
        background: var(--primary);
    }

    .vform-head h2 {
        font-size: clamp(1.2rem, 2.2vw, 1.55rem);
        font-weight: 800;
        color: var(--dark);
        margin: 0;
    }

    .vform .form-label {
        font-weight: 600;
        color: var(--dark);
        font-size: .88rem;
        margin-bottom: 6px;
    }

    .vform .form-control,
    .vform .form-select {
        border-radius: 12px;
        border: 1px solid #e2e7f0;
        padding: .6rem .9rem;
        background-color: #fbfcfe;
        transition: border-color .2s ease, box-shadow .2s ease, background-color .2s ease;
    }

    .vform .form-control:focus,
    .vform .form-select:focus {
        background-color: #fff;
        border-color: var(--primary);
        box-shadow: 0 0 0 .2rem rgba(255, 94, 20, .15);
    }

    .vform .btn-primary {
        border-radius: 50px;
        padding: .7rem 2.4rem;
        font-weight: 600;
        border: none;
        background: linear-gradient(135deg, var(--primary), #ff8a4c);
        box-shadow: 0 12px 24px -10px rgba(255, 94, 20, .7);
    }
</style>
