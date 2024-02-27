import React, { Children, PropsWithChildren } from "react";

const CardBody:React.FC<PropsWithChildren> = ({children}) => {
    return (
        <>
            <div className="flex items-start">
                {children}
            </div>
        </>
    );
};

export default CardBody;
