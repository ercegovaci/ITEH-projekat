import { Fragment } from "react";
import Footer from "../component/layout/footer";
import Header from "../component/layout/header";
import Banner from "../component/section/banner";
import DeloviProjekta from "./delovi-projekta";


const DeloviProjektaStranica = () => {
    return (
        <Fragment>
            <Header />
            <Banner />
            <DeloviProjekta />
            <Footer />
        </Fragment>
    );
}
 
export default DeloviProjektaStranica;